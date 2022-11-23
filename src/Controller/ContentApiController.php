<?php

namespace LexprodSas\ContaoContentApiBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/api", defaults={"_scope" = "frontend", "_token_check" = false})
 */
class ContentApiController extends AbstractController
{
    public function __invoke(Request $request): Response
    {
        return new Response('Hello World!');
    }
}
