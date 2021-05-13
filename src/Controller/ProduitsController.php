<?php

namespace App\Controller;

use App\Entity\Produits;
use App\Form\ProduitsType;
use App\Repository\ProduitsRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("boutique")
 */
class ProduitsController extends AbstractController
{
    /**
     * @Route("/", name="admin_produits_index", methods={"GET"})
     */
    public function index(ProduitsRepository $produitsRepository, Request $request, PaginatorInterface $paginator): Response
    {
        $produit = $paginator->paginate(
            $produitsRepository->findAll(),
            $request->query->get("page",1),
            6
        );

        return $this->render('pages/boutique.html.twig', [
            'produits' => $produit,
        ]);
    }

}
