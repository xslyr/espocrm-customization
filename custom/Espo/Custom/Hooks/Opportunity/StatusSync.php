<?php
// custom/Espo/Custom/Hooks/Opportunity/StatusSync.php
namespace Espo\Custom\Hooks\Opportunity;

use Espo\Core\ORM\EntityManager;
use Espo\ORM\Entity;
use Espo\Core\Exceptions\BadRequest;

class StatusSync
{
    private EntityManager $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function beforeSave(Entity $entity, array $options = [])
    {
        $fields = ['stage', 'request', 'property', 'cLostReason'];
        $changed = array_filter($fields, fn($f) => $entity->isAttributeChanged($f));

        if (empty($changed)) {
            return;
        }

        $opportunityId = $entity->getId();
        $stage = $entity->get('stage');
        
        $requestId = $entity->get('requestId');
        $request = $requestId ? $this->entityManager->getEntity('RealEstateRequest', $requestId) : null;

        $propertyId = $entity->get('propertyId') ?? null;
        $property = $propertyId ? $this->entityManager->getEntity('RealEstateProperty', $propertyId) : null;

        if (!$property) {
            return;
        }

        $propertyStatus = $property->get('status');
        $activeLinks = $this->getActivePropertyLinks($propertyId, $opportunityId);

        // Validação prévia de disponibilidade antes de qualquer alteração de estado            **************************************************
        if ($stage !== 'Closed Lost') {
            $this->validatePropertyAvailability($property, $activeLinks, $stage, $entity);
        }

        switch ($stage) {
            case 'Prospecting':
                if ($request) {
                    $request->set('status', 'In Process');
                    $this->entityManager->saveEntity($request);
                }

                if (!in_array($propertyStatus, ['Assigned', 'Canceled', 'Lost', 'Completed'])) {
                    $this->updatePropertyStatusBasedOnActiveLinks($property, $activeLinks, $stage);
                }
                break;

            case 'Proposed':
                if ($request) {
                    $request->set('status', 'In Process');
                    $this->entityManager->saveEntity($request);
                }

                if (!in_array($propertyStatus, ['Assigned', 'Canceled', 'Lost', 'Completed'])) {
                    $this->updatePropertyStatusBasedOnActiveLinks($property, $activeLinks, $stage);
                }
                break;

            case 'Presented':
                if ($request) {
                    $request->set('status', 'Completed');
                    $this->entityManager->saveEntity($request);
                }

                if (!in_array($propertyStatus, ['Assigned', 'Canceled', 'Lost', 'Completed'])) {
                    $this->updatePropertyStatusBasedOnActiveLinks($property, $activeLinks, $stage);
                }
                break;

            case 'Closed Won':
                if ($request) {
                    $request->set('status', 'Completed');
                    $this->entityManager->saveEntity($request);
                }

                // Quando fechado com sucesso, o imóvel assume status de concluído/vendido
                $property->set('status', 'Completed');
                $this->entityManager->saveEntity($property);
                $entity->set('cMessage', '');

                $unavailableHtml = "<span class='danger-field'>Este imóvel não está mais disponível.</span>";
                foreach ($activeLinks as $relatedOpportunity) {
                    $relatedOpportunity->set('cMessage', $unavailableHtml);
                    $this->entityManager->saveEntity($relatedOpportunity);
                }
                
                break;

            case 'Closed Lost':
                $lostReason = $entity->get('cLostReason');

                if ($request) {
                    $request->set('cLostReason', $lostReason);
                    $request->set('status', 'Lost');
                    $this->entityManager->saveEntity($request);
                }
                
                switch ($lostReason) {
                    case 'Proprietário Desistiu da Venda': 
                        $newStatus = 'Canceled';
                        break;
                    case 'Imóvel Vendido por outro Corretor': 
                        $newStatus = 'Lost';
                        break;
                    default:
                        // Opportunidade falhou mas o imóvel continua disponível
                        $newStatus = 'New';
                }
                $property->set('status', $newStatus);
                $this->entityManager->saveEntity($property);
                $entity->set('cMessage', '');
                
                if ( $newStatus !== 'New' ) {
                    $unavailableHtml = "<span class='danger-field'>Este imóvel não está mais disponível.</span>";
                    foreach ($activeLinks as $relatedOpportunity) {
                        $relatedOpportunity->set('cMessage', $unavailableHtml);
                        $this->entityManager->saveEntity($relatedOpportunity);
                    }
                }
                
                
                break;
        }
    }
    
    private function getActivePropertyLinks($propertyId, $opportunityId)
    {
        return $this->entityManager->getRepository('Opportunity')
            ->where([
                'propertyId' => $propertyId,
                'id!=' => $opportunityId,
                'stage!=' => ['Closed Lost', 'Closed Won']
            ])
            ->find();
    }

    private function updatePropertyStatusBasedOnActiveLinks($property, $activeLinks, $currentStage)
    {
        $stages = [$currentStage];
        foreach ($activeLinks as $link) {
            $stages[] = $link->get('stage');
        }

        $hasAdvancedStage = !empty(array_intersect($stages, ['Presented']));
        $hasProposedOrProspecting = !empty(array_intersect($stages, ['Proposed', 'Prospecting']));

        if ($hasAdvancedStage) {
            $property->set('status', 'In Process');
        } elseif ($hasProposedOrProspecting) {
            $property->set('status', 'New');
        }
        
        $this->entityManager->saveEntity($property);
    }

    private function validatePropertyAvailability($property, $activeLinks, $stage, $entity)
    {
        $status = $property->get('status');
        
        if (in_array($status, ['Completed', 'Canceled', 'Lost', 'Assigned'])) {
            throw new BadRequest("O imovel nao esta disponivel.");
        }

        $count = count($activeLinks);

        if ($count > 0) {
            $propertyInUse = $count == 1 
                ? "Este imóvel esta sendo usado em $count outra oportunidade." 
                : "Este imóvel esta sendo usado em $count outras oportunidades.";
            
            $html = "<span class='warning-field'>" . $propertyInUse . "</span>";

            if (in_array($stage, ['Proposed', 'Presented', 'Closed Won'])) {
                $entity->set('cMessage', $html);
            }
        } else {
            $entity->set('cMessage', '');
        }
    }
}