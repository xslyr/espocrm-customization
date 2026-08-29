<?php
namespace Espo\Custom\Hooks\CCondominium;

use Espo\ORM\Entity;
use Espo\ORM\EntityManager;

class CitySync
{
    private EntityManager $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function beforeSave(Entity $entity, array $options): void
    {
        if ($entity->isAttributeChanged('cCityLinkId') || $entity->isNew()) {
            $cityId = $entity->get('cCityLinkId');

            if ($cityId) {
                $city = $this->entityManager->getEntity('CCity', $cityId);
                if ($city) {
                    $nomeLimpo = trim(explode('-', $city->get('name'))[0]);

                    $entity->set('addressCity', $nomeLimpo);

                    if ($city->get('state')) {
                        $entity->set('addressState', $city->get('state'));
                    }
                }
            } else {
                $entity->set('addressCity', null);
                $entity->set('addressState', null);
            }
        }
    }
}
