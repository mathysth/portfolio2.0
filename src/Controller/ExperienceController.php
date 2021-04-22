<?php

namespace App\Controller;

use App\Entity\Realisation;
use App\Repository\RealisationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("experience")
 */
class ExperienceController extends AbstractController
{
    /**
     * @Route("/", name="realisation_index", methods={"GET"})
     * @param RealisationRepository $realisationRepository
     * @return Response
     */
    public function index(RealisationRepository $realisationRepository): Response
    {
        return $this->render('pages/experience/realisation.html.twig', [
            'realisations' => $realisationRepository->findAll(),
        ]);
    }

    /**
     * @Route("/{id}", name="realisation_show", methods={"GET"})
     * @param Realisation $realisation
     * @return Response
     */
    public function show(Realisation $realisation): Response
    {
        return $this->render('pages/experience/show.html.twig', [
            'experience' => $realisation,
        ]);
    }
}
