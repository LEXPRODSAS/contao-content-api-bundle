<?php

namespace LexprodSas\ContaoContentApiBundle\Exceptions;

use LexprodSas\ContaoContentApiBundle\ContaoJsonSerializable;
use LexprodSas\ContaoContentApiBundle\ContaoJson;

/**
 * ContentApiNotFoundException is thrown whenever something is simply not there.
 * It indicates an Error 404.
 */
class ContentApiNotFoundException extends \Exception implements ContaoJsonSerializable
{
    public function toJson(): ContaoJson
    {
        return new ContaoJson([
            'error' => 'ContentApiNotFoundException',
            'message' => $this->getMessage(),
        ]);
    }
}
