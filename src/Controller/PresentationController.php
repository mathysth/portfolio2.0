<?php

namespace App\Controller;

use App\Entity\Presentation;
use App\Form\PresentationType;
use App\Repository\CompetencesCategoriesRepository;
use App\Repository\CompetencesRepository;
use App\Repository\PresentationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/{lang}/presentation")
 */
class PresentationController extends AbstractController
{
    /**
     * @Route("/", name="presentation", methods={"GET"})
     * @param CompetencesCategoriesRepository $categoriesRepository
     * @param CompetencesRepository $competencesRepository
     * @return Response
     */
    public function show(CompetencesCategoriesRepository $categoriesRepository,CompetencesRepository $competencesRepository): Response
    {
        return $this->render('pages/presentation.html.twig',[
            'categoryCompetence' => $categoriesRepository->findAll(),
            'competence' => $competencesRepository->findAll()
        ]);
    }
}
