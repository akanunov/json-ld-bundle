<?php

namespace SecIT\JsonLdBundle\Twig;

use SecIT\JsonLdBundle\Service\JsonLd;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

/**
 * Class JsonLdExtension.
 *
 * @author Tomasz Gemza
 */
class JsonLdExtension extends AbstractExtension
{
    public function __construct(private readonly JsonLd $jsonLd)
    {
    }


    /**
     * {@inheritdoc}
     */
    public function getFilters()
    {
        return [
            new TwigFilter('json_ld', [$this, 'jsonLdFilter'], ['is_safe' => ['html']]),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'secit_json_ld_extension';
    }

    /**
     * Generate JSON-LD.
     *
     * @param object $object
     *
     * @return string
     */
    public function jsonLdFilter($object)
    {
        return $this->jsonLd->generate($object);
    }
}
