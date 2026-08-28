<?php
namespace Espo\Custom\Hooks\Opportunity;

use Espo\ORM\Entity;
use Espo\ORM\EntityManager;

class Autoname
{
    public static int $order = 100; 

    private EntityManager $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function beforeSave(Entity $entity, array $options): void
    {
        $requestId = $entity->get('requestId');
        $contactsIds = $entity->get('contactsIds') ?: [];

        $request = null;
        $requestName = '';
        $requestType = '';

        if ($requestId) {
            $request = $this->entityManager->getEntity('RealEstateRequest', $requestId);
            if ($request) {
                $requestName = $request->get('name');
                $requestType = $request->get('type');
            }
        }

        if (empty($contactsIds) && $request) {
            $requestContacts = $this->entityManager->getRepository('RealEstateRequest')
                ->getRelation($request, 'contacts')
                ->find();
            
            if (count($requestContacts) > 0) {
                $contactsNames = (object)[];
                $contactsColumns = (object)[];

                $role = '';
                if ($requestType === 'Rent') {
                    $role = 'Tenant';
                } elseif ($requestType === 'Sale') {
                    $role = 'Requester';
                }

                // 1. Converte a EntityCollection para um array PHP comum
                $contactsArray = [];
                foreach ($requestContacts as $reqContact) {
                    $contactsArray[] = $reqContact;
                }

                // 2. Inverte o array
                $contactsArray = array_reverse($contactsArray);

                // 3. Itera sobre o array invertido
                foreach ($contactsArray as $reqContact) {
                    $id = $reqContact->get('id');
                    
                    $contactsIds[] = $id;
                    $contactsNames->$id = $reqContact->get('name');
                    $contactsColumns->$id = (object) ['role' => $role];
                }
                
                $entity->set('contactsIds', $contactsIds);
                $entity->set('contactsNames', $contactsNames);
                $entity->set('contactsColumns', $contactsColumns);
            }
        }

        $contactName = '';

        // Pega o nome do contato que ficou na primeira posição do array (agora invertido)
        if (!empty($contactsIds)) {
            $firstContactId = $contactsIds[0];
            $contact = $this->entityManager->getEntity('Contact', $firstContactId);
            if ($contact) {
                $contactName = $contact->get('name');
            }
        }

        if ($contactName && $requestName) {
            $entity->set('name', "{$contactName} - {$requestName}");
        } elseif ($contactName) {
            $entity->set('name', $contactName);
        } elseif ($requestName) {
            $entity->set('name', $requestName);
        }
    }
}
