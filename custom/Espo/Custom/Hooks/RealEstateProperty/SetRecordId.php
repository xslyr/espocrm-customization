<?php
namespace Espo\Custom\Hooks\RealEstateProperty;

use Espo\ORM\Entity;

class SetRecordId
{
    public function beforeSave(Entity $entity, array $options = []): void
    {
        // O EspoCRM gera o ID da entidade antes de salvar no banco.
        // Copiamos esse ID para o campo customizado.
        if ($entity->isNew() || $entity->get('cRecordId') !== $entity->get('id')) {
            $entity->set('cRecordId', $entity->get('id'));
        }
    }
}
