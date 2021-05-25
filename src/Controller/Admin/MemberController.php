<?php

namespace App\Controller\Admin;

use App\Entity\Member;
use App\Form\MemberType;
use App\Repository\MemberLoginHistoryRepository;
use App\Repository\MemberRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
class MemberController extends AbstractController
{

    /**
     * @var UserPasswordEncoderInterface
     */
    private UserPasswordEncoderInterface $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {

        $this->encoder = $encoder;
    }

    /**
     * @Route("/admin/member/", name="admin_member_index", methods={"GET"})
     * @param MemberRepository $memberRepository
     * @param Request $request
     * @param PaginatorInterface $paginator
     * @return Response
     */
    public function index(MemberRepository $memberRepository,Request $request,PaginatorInterface $paginator): Response
    {
        $member = $paginator->paginate(
            $memberRepository->findAllVisibleQuery(),
            $request->query->getInt("page",1),
            10
        );
        return $this->render('admin/member/index.html.twig', [
            'members' => $member,
        ]);
    }

    /**
     * @Route("/admin/member/new", name="admin_member_new", methods={"GET","POST"})
     * @param Request $request
     * @return Response
     */
    public function new(Request $request): Response
    {

        $member = new Member();
        $member->setPassword($this->encoder->encodePassword($member, 'AirGuyaneGF97300'));
        $form = $this->createForm(MemberType::class, $member);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($member);
            $entityManager->flush();
            $this->addFlash("info","Membre ajouté avec succès");
            return $this->redirectToRoute('admin_member_index');
        }

        return $this->render('admin/member/new.html.twig', [
            'member' => $member,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin/member/edit/{id}", name="admin_member_edit", methods={"GET","POST"})
     * @param Request $request
     * @param Member $member
     * @return Response
     */
    public function edit(Request $request, Member $member): Response
    {
        $form = $this->createForm(MemberType::class, $member);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            $this->addFlash("info","Membre modifié avec succès");
            return $this->redirectToRoute('admin_member_index');
        }

        return $this->render('admin/member/edit.html.twig', [
            'member' => $member,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin/profil", name="admin_member_profil")
     */
    public function profil(): Response
    {
        return $this->render('admin/member/profil.html.twig');
    }

    /**
     * @Route("/{id}", name="admin_member_delete", methods={"DELETE"})
     * @param Request $request
     * @return Response
     */
    public function delete(Request $request, Member $member): Response
    {
        if ($this->isCsrfTokenValid('delete'.$member->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $error = false;
            try {
                $this->addFlash("info","Membre supprimé avec succès");
                $entityManager->remove($member);
                $entityManager->flush();
            }catch (\Exception $exception){

            }
        }
        return $this->redirectToRoute('admin_member_index');
    }

    /**
     * @Route("/admin/reset/{id}", name="admin_member_reset", methods={"RESET"})
     * @param Request $request
     * @param Member $member
     * @param MemberRepository $memberRepository
     * @return Response
     */
    public function resetPassword(Request $request, Member $member,MemberRepository $memberRepository): Response
    {
        if ($this->isCsrfTokenValid('reset'.$member->getId(), $request->request->get('_token'))) {
            if ($request->request->get("_password")){
                $plainPassword = $request->request->get("_password");
            }else{
                $plainPassword = "AirGuyaneGF97300";
            }
            $password = $this->encoder->encodePassword($member, $plainPassword);
            $req = $memberRepository->resetMemberPassword($password,$member);
            $this->addFlash("info","Mot de passe modifié avec succès");
        }

        return $this->redirectToRoute('admin_member_profil');

    }

}