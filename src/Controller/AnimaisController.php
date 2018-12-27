<?php

namespace App\Controller;

use App\Entity\Animal;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AnimaisController extends AbstractController
{
    /**
     * @Route("/animais", name="listar_animais")
     * @Template("animais/index.html.twig")
     */
    public function index()
    {
        $em = $this->getDoctrine()->getManager();
        $animais = $em->getRepository(Animal::class)->findAll();;

        return  [
            'animais' => $animais
        ];
    }

    /**
     * @Route("/animal/visualizar/{id}", name="visualizar_animal")
     * @Template("animal/view.html.twig")
     * @param Animal $animal
     * @return array
    */
    public function view(Animal $animal)
        {
            return  [
                'animal' =>$animal
            ];
        }

}
