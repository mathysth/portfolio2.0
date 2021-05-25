<?php

namespace App\DataFixtures;

use App\Entity\Member;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{


    /**
     * @var UserPasswordEncoderInterface
     */
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {

        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {
        /* $product = new Product();
        // $manager->persist($product);

        $member = new Member();
        $member->setPseudo("mathys");
        $member->setEmail("mathys@gmail.com");
        $member->setPassword($this->encoder->encodePassword($member,"admin"));
        $manager->persist($member);
        $manager->flush();

        */
    }
}
