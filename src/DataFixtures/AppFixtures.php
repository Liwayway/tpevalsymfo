<?php

namespace App\DataFixtures;

use App\Entity\BlogPost;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 20; $i++) {
           $blogpost = new BlogPost();
           $blogpost->setTitle("La vie à Auroville $i");
           $blogpost->setContent("Méditation, informatique et cours divers à foison");
           $blogpost-> setCategoryOfBlogPost("lifestyle");
           $blogpost->setFeatured(true);
           $blogpost->setDate(12072019);
           $blogpost->setSlug();


            $manager->persist($blogpost);
        }

        $manager->flush();
    }
}
