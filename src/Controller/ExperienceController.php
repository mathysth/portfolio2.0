<?php

namespace App\Controller;

use App\Entity\Realisation;
use App\Repository\ExperienceRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("experience")
 */
class ExperienceController extends AbstractController
{
    /**
     * @Route("/", name="realisation_index", methods={"GET"})
     * @param ExperienceRepository $realisationRepository
     * @param PaginatorInterface $paginator
     * @param Request $request
     * @return Response
     */
    public function index(ExperienceRepository $realisationRepository,PaginatorInterface $paginator,Request $request): Response
    {
        $experience = $paginator->paginate(
            $realisationRepository->findAll(),
            $request->query->get('page',1),
            6
        );

        dump($realisationRepository->findAll());
        return $this->render('pages/experience/realisation.html.twig', [
            'experiences' => $experience,
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
