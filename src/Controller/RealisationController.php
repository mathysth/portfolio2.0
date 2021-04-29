<?php

namespace App\Controller;

use App\Repository\RealisationRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("realisations")
 */
class RealisationController extends AbstractController
{
    /**
     * @Route("/", name="realisation", methods={"GET"})
     */
    public function index(RealisationRepository $realisationRepository,PaginatorInterface $paginator, Request $request): Response
    {
        $realisations = $paginator->paginate(
            $realisationRepository->findAll(),
            $request->query->get('page',1),
            6
        );
        return $this->render('pages/realisation.html.twig', [
            'realisations' => $realisations
        ]);
    }

}
