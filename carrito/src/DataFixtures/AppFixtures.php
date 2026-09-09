<?php

namespace App\DataFixtures;

use App\Entity\Usuario;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $password = '$2y$13$.BlD4Mpe6H8DcnvJYUtja.wKpyj1m7w/tPrZxbspuMklg48pPrCYy';

        for ($i = 1; $i <= 5; $i++) {
            $usuario = new Usuario();

            $usuario->setNombre('Usuario' . $i);
            $usuario->setEmail('usuario' . $i . '@gmail.com');
            $usuario->setPassword($password);

            $manager->persist($usuario);
        }

        $manager->flush();
    }
}


