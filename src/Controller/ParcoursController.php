<?php

namespace App\Controller;

use App\Entity\Parcours;
use App\Form\ParcoursType;
use App\Repository\ParcoursRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("parcours")
 */
class ParcoursController extends AbstractController
{
    /**
     * @Route("/", name="parcours", methods={"GET"})
     */
    public function index(ParcoursRepository $parcoursRepository,PaginatorInterface $paginator,Request $request): Response
    {
        $parcours = $paginator->paginate(
          $parcoursRepository->findAll(),
          $request->query->get("page",1),
            1
        );
        return $this->render('pages/parcours.html.twig', [
            'parcours' => $parcours,
        ]);
    }

}
