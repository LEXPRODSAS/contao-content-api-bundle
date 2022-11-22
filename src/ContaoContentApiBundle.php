<?php

namespace LexprodSas\ContaoContentApiBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use LexprodSas\ContaoContentApiBundle\DependencyInjection\ContentApiExtension;

class ContaoContentApiBundle extends Bundle
{
    public function getContainerExtension(): ?ExtensionInterface
    {
        return new ContentApiExtension();
    }
}
