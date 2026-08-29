<?php
namespace Espo\Custom\Hooks\RealEstateProperty;

use Espo\ORM\Entity;
use Espo\ORM\EntityManager;

class CopiaEnderecoCondominio
{
    public function __construct(private EntityManager $entityManager) {}

    public function beforeSave(Entity $entity, array $options = []): void
    {
        $condominioId = $entity->get('cCondominiumId');

        if (!empty($condominioId)) {
            $condominio = $this->entityManager->getEntity('CCondominium', $condominioId);

            if ($condominio) {
                if (empty($entity->get('address'))) {
                    $entity->set('address', $condominio->get('address'));
                }
                if (empty($entity->get('cAddressNeighbor'))) {
                    $entity->set('cAddressNeighbor', $condominio->get('addressNeighbor'));
                }
                if (empty($entity->get('addressCity'))) {
                    $entity->set('addressCity', $condominio->get('addressCity'));
                }
		if (empty($entity->get('addressState'))) {
                    $entity->set('addressState', $condominio->get('addressState'));
                }
                if (empty($entity->get('addressPostalCode'))) {
                    $entity->set('addressPostalCode', $condominio->get('addressPostalCode'));
                }
                if (empty($entity->get('addressCountry'))) {
                    $entity->set('addressCountry', $condominio->get('addressCountry'));
                }
            }
        }
    }
}
