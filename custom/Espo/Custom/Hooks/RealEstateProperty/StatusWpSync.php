<?php
namespace Espo\Custom\Hooks\RealEstateProperty;

use Espo\ORM\Entity;

class StatusWpSync
{

    public function beforeSave(Entity $entity, array $options): void
    {

        if ($entity->isAttributeChanged('status') || $entity->isNew()) {
            $status = $entity->get('status');

            $targetStatuses = ['Completed', 'Canceled', 'Lost'];

            if (in_array($status, $targetStatuses, true)) {
                $entity->set('cStatuswp', 'Rascunho');
            }
        }
    }
}
