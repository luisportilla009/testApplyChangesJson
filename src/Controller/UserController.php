<?php

namespace App\Controller;

use App\Entity\Hojavida;
use App\Service\Helpers;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    #[Route('/hoja/{id}', name: 'app_user')]
    public function index(ManagerRegistry $doctrine, Helpers $helpers, int $id): Response
    {
        $hojavida = $doctrine->getRepository(Hojavida::class)->find($id);
        $response = $helpers->serializador($hojavida);
        return $response;
    }
}
