<?php

namespace Loevgaard\DandomainFoundationBundle\Service;

use Dandomain\Api\Api;
use GuzzleHttp;
use Loevgaard\DandomainFoundationBundle\DateTime\DateTimeImmutable;
use Loevgaard\DandomainFoundationBundle\Synchronizer\ProductSynchronizer;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\HttpKernel\Kernel;

class ProductService extends Service
{
    /**
     * @var Api
     */
    protected $api;

    /**
     * @var Kernel
     */
    protected $kernel;

    /**
     * @var ProductSynchronizer
     */
    protected $productSynchronizer;

    /**
     * @var string
     */
    protected $settingsFile;

    /**
     * @param Api                 $api
     * @param ProductSynchronizer $productSynchronizer
     * @param Kernel              $kernel
     */
    public function __construct(Api $api, ProductSynchronizer $productSynchronizer, Kernel $kernel)
    {
        $this->api = $api;
        $this->kernel = $kernel;
        $this->productSynchronizer = $productSynchronizer;
        $this->settingsFile = $kernel->getLogDir().'/dandomain-foundation-product-sync.log';
    }

    /**
     * Synchronizates products.
     *
     * @param bool   $changed
     * @param string $end
     * @param string $start
     */
    public function productSync($changed = false, $start = null, $end = null)
    {
        $this->syncAll([
            'changed' => $changed,
            'start' => $start,
            'end' => $end
        ]);
    }

    public function syncAll(array $options = [])
    {
        $changed = $options['changed'];
        $start = $options['start'];
        $end = $options['end'];

        $output = $this->getOutput();

        if ($changed) {
            $settings = unserialize(@file_get_contents($this->settingsFile));
            $now = new \DateTimeImmutable();

            if ($start) {
                $start = DateTimeImmutable::createFromFormat('Y-m-d', $start);
                if($start === false) {
                    throw new \InvalidArgumentException('$start has the wrong format');
                }
                $start = $start->setTime(0, 0, 0);
            } elseif ($settings and array_key_exists('end', $settings) and ($settings['end'] instanceof \DateTimeImmutable)) {
                $start = $settings['end'];
            } else {
                $start = DateTimeImmutable::createFromFormat('Y-m-d H:i:s', '2000-01-01 00:00:00');
            }

            if($end) {
                $end = DateTimeImmutable::createFromFormat('Y-m-d', $end);
                if($end === false) {
                    throw new \InvalidArgumentException('$end has the wrong format');
                }

                $end = $end->setTime(23, 59, 59);
            } else {
                $end = $now;
            }

            // verification of dates
            if($end > $now) {
                $end = $now;
            }

            if($start > $end) {
                throw new \InvalidArgumentException('Start date is after end date');
            }

            $output->writeln($start->format('Y-m-d H:i:s').' - '.$end->format('Y-m-d H:i:s'), OutputInterface::VERBOSITY_VERBOSE);

            $pageSize = 100;
            $modifiedProductCount = $this->api->productData->countByModifiedInterval($start, $end);
            $pages = ceil($modifiedProductCount / $pageSize);

            $output->writeln('Modified products: '.$modifiedProductCount.' | Page size: '.$pageSize.' | Page count: '.$pages, OutputInterface::VERBOSITY_VERBOSE);

            for($page = 1; $page <= $pages; $page++) {
                $output->writeln($page.' / '.$pages, OutputInterface::VERBOSITY_VERBOSE);
                $products = GuzzleHttp\json_decode((string)$this->api->productData->getDataProductsInModifiedInterval($start, $end, $page, $pageSize)->getBody());

                foreach ($products as $product) {
                    $output->writeln('Product: '.$product->number, OutputInterface::VERBOSITY_VERBOSE);
                    $this->productSynchronizer->syncProduct($product, true);
                }
            }

            file_put_contents($this->settingsFile, serialize([
                'start' => $start,
                'end' => $end
            ]));
        } else {
            $pageSize = 200;
            $pageCount = \GuzzleHttp\json_decode($this->api->productData->getProductPageCount($pageSize)->getBody()->getContents());

            for ($page = $pageCount; $page >= 1; --$page) {
                $output->writeln($page.'/'.$pageCount, OutputInterface::VERBOSITY_VERBOSE);
                $products = \GuzzleHttp\json_decode($this->api->productData->getProductPage($page, $pageSize)->getBody()->getContents());

                foreach ($products as $product) {
                    $this->productSynchronizer->syncProduct($product, true);
                }
            }
        }
    }

    public function syncOne(array $options = [])
    {
        $this->syncAll();
    }
}
