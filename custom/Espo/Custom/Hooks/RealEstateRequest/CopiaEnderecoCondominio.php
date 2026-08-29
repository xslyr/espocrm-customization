<?php
namespace Espo\Custom\Hooks\RealEstateRequest;

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
                $entity->set('cAddressNeighbor', $condominio->get('addressNeighbor'));
                $entity->set('cAddressCity', $condominio->get('addressCity'));
                $entity->set('cAddressState', $condominio->get('addressState'));
                $entity->set('cAddressCountry', $condominio->get('addressCountry'));
            }
        }
    }
}
