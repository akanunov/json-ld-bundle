<?php

namespace SecIT\JsonLdBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Class Configuration.
 *
 * @author Tomasz Gemza
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder():TreeBuilder
    {
        $treeBuilder = new TreeBuilder('secit_json_ld');
        $rootNode = $treeBuilder->getRootNode();

        // Define configuration structure here
        $rootNode
            ->children()
            // example:
            // ->scalarNode('enabled')->defaultTrue()->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
