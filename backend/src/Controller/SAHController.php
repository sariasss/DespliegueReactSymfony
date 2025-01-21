<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class SAHController
{
#[Route('/api/sah', name: 'sah_hello')]
public function index(): Response
{
return new Response('Symfony de Nombre Completo Responde a la llamada de
React');
}
}
