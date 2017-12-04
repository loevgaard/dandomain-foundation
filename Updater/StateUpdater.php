<?php

namespace Loevgaard\DandomainFoundationBundle\Updater;

use Loevgaard\DandomainFoundation\Entity\Generated\StateInterface;
use Loevgaard\DandomainFoundation\Entity\State;
use Loevgaard\DandomainFoundationBundle\Entity\StateRepositoryInterface;

class StateUpdater
{
    /**
     * @var StateRepositoryInterface
     */
    protected $stateRepository;

    public function __construct(StateRepositoryInterface $stateRepository)
    {
        $this->stateRepository = $stateRepository;
    }

    /**
     * This method is called when an payment method is embedded in another object, i.e. orders
     *
     * @param array $data
     * @return StateInterface
     */
    public function updateFromEmbeddedApiResponse(array $data) : StateInterface
    {
        $state = $this->stateRepository->findOneByExternalId($data['id']);
        if(!$state) {
            // only update when we create a new because this is the embedded method
            $state = new State();
            $state->setExternalId($data['id'])
                ->setExclStatistics($data['exclStatistics'])
                ->setIsDefault($data['isDefault'])
                ->setName($data['name'])
            ;
        }

        return $state;
    }
}