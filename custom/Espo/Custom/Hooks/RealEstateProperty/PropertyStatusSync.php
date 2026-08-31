<?php 

// custom/Espo/Custom/Hooks/RealEstateProperty/PropertyStatusSync.php
namespace Espo\Custom\Hooks\RealEstateProperty;

use Espo\Core\ORM\EntityManager;
use Espo\ORM\Entity;

class PropertyStatusSync
{
    private EntityManager $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function afterSave(Entity $entity, array $options = [])
    {
        // Executa apenas se o status do imóvel foi alterado manualmente
        if (!$entity->isAttributeChanged('status')) {
            return;
        }

        $propertyId = $entity->getId();
        $newStatus = $entity->get('status');

        // Se o imóvel voltou a ficar ativo/disponível, limpa o alerta de todas as oportunidades abertas
        if (in_array($newStatus, ['New', 'Assigned'])) {
            $activeOpportunities = $this->entityManager->getRepository('Opportunity')
                ->where([
                    'propertyId' => $propertyId,
                    'stage!=' => ['Closed Lost', 'Closed Won','Canceled']
                ])
                ->find();

            foreach ($activeOpportunities as $opportunity) {
                $opportunity->set('cMessage', null);
                $this->entityManager->saveEntity($opportunity);
            }
        }
    }
}