<?php
namespace Espo\Custom\Hooks\RealEstateProperty;

use Espo\ORM\Entity;
use Espo\ORM\EntityManager;

class ConsolidaAdicionais
{
    public function __construct(private EntityManager $entityManager) {}

    public function beforeSave(Entity $entity, array $options = []): void
    {
        $adicionaisImovel = $entity->get('cAdicionais') ?: [];
        $lazerCond = [];
        $segurancaCond = [];

        $condominioId = $entity->get('cCondominiumId');
        if (!empty($condominioId)) {
            $condominio = $this->entityManager->getEntity('CCondominium', $condominioId);
            if ($condominio) {
                $lazerCond = $condominio->get('lazer') ?: [];
                $segurancaCond = $condominio->get('segurancaservicos') ?: [];
            }
        }

        $consolidado = array_unique(array_merge($adicionaisImovel, $lazerCond, $segurancaCond));
        $entity->set('cConsolidadoadicionais', array_values($consolidado));
    }
}
