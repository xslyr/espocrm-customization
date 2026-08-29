<?php
namespace Espo\Modules\RealEstate\Hooks\RealEstateProperty;

use Espo\ORM\Entity;
use Espo\ORM\EntityManager;

class WebhookOnDelete
{
    private EntityManager $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function beforeRemove(Entity $entity, array $options): void
    {
        $payload = [
            'action' => 'delete',
            'id' => $entity->get('id'),
            'type' => $entity->get('type'),
            'id_wp' => $entity->get('cIdwp'),
            'url_wp' => $entity->get('cUrlwp'),
            'url_gdrive' => $entity->get('cUrlGdrive')
        ];

        // Instancia e persiste a tarefa na fila do banco de dados
        $job = $this->entityManager->getEntity('Job');
        $job->set([
            'name' => 'SendCustomWebhook',
            'status' => 'Pending',
            'data' => (object) [
                'url' => 'https://automacoes.juimoveis.com.br/webhook/c386bf12-146c-4926-bb23-6da771998191',
                'payload' => $payload
            ]
        ]);

        $this->entityManager->saveEntity($job);
    }
}
