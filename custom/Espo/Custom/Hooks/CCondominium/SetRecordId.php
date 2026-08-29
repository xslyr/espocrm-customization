<?php
namespace Espo\Custom\Hooks\CCondominium;

use Espo\ORM\Entity;

class SetRecordId
{
    public function beforeSave(Entity $entity, array $options = []): void
    {
        if ($entity->isNew() || $entity->get('recordId') !== $entity->get('id')) {
            $entity->set('recordId', $entity->get('id'));
        }
    }
}
