<?php

namespace App\Controller;

use App\Entity\Historial;
use App\Service\Helpers;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Serializer;

class HistorialController extends AbstractController
{
    #[Route('/historial/{id}', name: 'app_historial')]
    public function fetch(ManagerRegistry $doctrine, Helpers $helpers, int $id)
    {
        $historial = $doctrine->getRepository(Historial::class)->find($id);
        $response = $helpers->serializador($historial);

        return $response;
    }

    #[Route('/historyApplyChanges/{id}', name: 'app_historial_apply_changes')]
    public function applyChanges(ManagerRegistry $doctrine, int $id): Response
    {
        $historial = $doctrine->getRepository(Historial::class)->find($id);
        $state = $historial->getEstado();

        return New Response($state);
    }
}
