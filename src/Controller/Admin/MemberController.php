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
     * @Route("/admin/profil", name="admin_member_profil")
     */
    public function profil(): Response
    {
        return $this->render('admin/member/profil.html.twig');
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