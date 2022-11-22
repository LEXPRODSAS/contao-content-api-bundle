<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
* @Route("/api", name=ContentApiController::class)
*/
class ContentApiController
{
    public function __invoke(Request $request): Response
    {
        return new Response('Hello World!');
    }
}