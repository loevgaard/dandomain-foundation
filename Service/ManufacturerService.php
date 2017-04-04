<?php

namespace Loevgaard\DandomainFoundationBundle\Service;

use Dandomain\Api\Api;
use Doctrine\ORM\EntityManager;
use GuzzleHttp;
use Loevgaard\DandomainFoundationBundle\Synchronizer\ManufacturerSynchronizer;

class ManufacturerService
{
    /**
     * @var Api
     */
    protected $api;

    /**
     * @var EntityManager
     */
    protected $em;

    /**
     * @var ManufacturerSynchronizer
     */
    protected $manufacturerSynchronizer;

    /**
     * Constructor.
     *
     * @param Api              $api
     * @param EntityManager    $em
     * @param ManufacturerSynchronizer $manufacturerSynchronizer
     */
    public function __construct(Api $api, EntityManager $em, ManufacturerSynchronizer $manufacturerSynchronizer)
    {
        $this->api = $api;
        $this->em = $em;
        $this->manufacturerSynchronizer = $manufacturerSynchronizer;
    }

    /**
     * Synchronizates manufacturers.
     */
    public function manufacturerSync()
    {
        $manufacturers = GuzzleHttp\json_decode($this->api->relatedData->getManufacturers()->getBody()->getContents());

        foreach ($manufacturers as $manufacturer) {
            $this->manufacturerSynchronizer->syncManufacturer($manufacturer, true);
        }
    }
}
