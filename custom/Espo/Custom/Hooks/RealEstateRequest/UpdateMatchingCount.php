<?php
namespace Espo\Custom\Hooks\RealEstateRequest;

use Espo\ORM\Entity;
use Espo\ORM\EntityManager;
use Espo\Core\InjectableFactory;
use Espo\Modules\RealEstate\Tools\Request\Service as RequestToolService;
use Espo\Core\Select\SearchParams;
use Espo\Modules\RealEstate\Entities\RealEstateProperty;
use Espo\Core\Utils\Log;

class UpdateMatchingCount
{
    private InjectableFactory $injectableFactory;
    private EntityManager $entityManager;
    private Log $log;

    public function __construct(InjectableFactory $injectableFactory, EntityManager $entityManager, Log $log)
    {
        $this->injectableFactory = $injectableFactory;
        $this->entityManager = $entityManager;
        $this->log = $log;
    }

    public function beforeSave(Entity $entity, array $options): void
    {
        if (!empty($options['silent'])) {
            return;
        }

        try {
            $toolService = $this->injectableFactory->create(RequestToolService::class);
            $query = $toolService->getMatchingPropertiesQuery($entity, SearchParams::create());
            
            // Instancia o repositório exatamente da mesma forma que o Service nativo
            $count = $this->entityManager
                ->getRDBRepositoryByClass(RealEstateProperty::class)
                ->clone($query)
                ->count();

            $entity->set('matchingPropertyCount', $count);

        } catch (\Throwable $e) {
            // Registra o erro no log ao invés de ignorar silenciosamente
            $this->log->error('UpdateMatchingCount Hook Falhou: ' . $e->getMessage() . ' no arquivo ' . $e->getFile() . ' linha ' . $e->getLine());
        }
    }
}