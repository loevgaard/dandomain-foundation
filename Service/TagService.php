<?php

namespace Loevgaard\DandomainFoundationBundle\Service;

use Dandomain\Api\Api;
use Loevgaard\DandomainFoundationBundle\Synchronizer\TagSynchronizer;
use Symfony\Component\Console\Output\OutputInterface;

class TagService extends Service
{
    /**
     * @var Api
     */
    protected $api;

    /**
     * @var TagSynchronizer
     */
    protected $tagSynchronizer;

    /**
     * @param Api               $api
     * @param TagSynchronizer   $tagSynchronizer
     */
    public function __construct(Api $api, TagSynchronizer $tagSynchronizer)
    {
        $this->api = $api;
        $this->tagSynchronizer = $tagSynchronizer;
    }

    /**
     * @deprecated
     */
    public function sync()
    {
        $this->syncAll();
    }

    public function syncAll(array $options = [])
    {
        $output = $this->getOutput();
        $pageSize = 100;
        $pages = $this->api->productTag->getProductTagPageCount($pageSize);

        for($page = 1; $page <= $pages; $page++) {
            $output->writeln($page.' / '.$pages, OutputInterface::VERBOSITY_VERBOSE);
            $tags = $this->api->productTag->getProductTagPage($page, $pageSize);
            foreach ($tags as $tag) {
                $this->tagSynchronizer->syncTag($tag, true);
            }
        }
    }

    public function syncOne(array $options = [])
    {
        $this->syncAll();
    }
}
