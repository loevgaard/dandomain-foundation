<?php

namespace Loevgaard\DandomainFoundationBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\PrependExtensionInterface;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

class LoevgaardDandomainFoundationExtension extends Extension implements PrependExtensionInterface
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);
        $container->setParameter('loevgaard_dandomain_foundation.synchronizer_logs_dir', $config['synchronizer_logs_dir']);

        $loader = new YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');
    }

    public function prepend(ContainerBuilder $container)
    {
        $ext = 'doctrine';

        if (!$container->hasExtension($ext)) {
            throw new \LogicException('You need to enable the doctrine bundle');
        }


        $container->prependExtensionConfig($ext, [
            'orm' => [
                'mappings' => [
                    'Loevgaard\\DandomainFoundation\\Entity' => [
                        'type' => 'annotation',
                        'dir' => '%kernel.project_dir%/vendor/loevgaard/dandomain-foundation-entities/src/Entity',
                        'is_bundle' => false,
                        'prefix' => 'Loevgaard\\DandomainFoundation\\Entity',
                    ],
                ],
            ],
        ]);
    }
}
