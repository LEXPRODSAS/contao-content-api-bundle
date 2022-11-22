<?php

namespace LexprodSas\ContaoContentApiBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use LexprodSas\ContaoContentApiBundle\DependencyInjection\ContentApiExtension;

class ContaoContentApiBundle extends Bundle
{
    public function getContainerExtension()
    {
        return new ContentApiExtension();
    }
}
