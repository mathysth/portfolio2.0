<?php

namespace App\Controller;

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
     * @Route("/", name="experience", methods={"GET"})
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
            1
        );

        return $this->render('pages/experience.html.twig', [
            'experiences' => $experience,
        ]);
    }
}
