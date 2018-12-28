<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Cliente;
use App\Entity\Animal;
use Symfony\Component\VarDumper\VarDumper;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="default")
     * @Template("default/index.html.twig")
     */
    public function index()
    {
        $em = $this->getDoctrine()->getManager();
        $qts_animais = $em->getRepository(Cliente::class)->qtdAnimaisPorCliente();
        $qte_racas = $em->getRepository(Animal::class)->qtdPorRaca();

        VarDumper::dump($qte_racas);

        return [
            'qts_animais' => $qts_animais,
            'qtde_por_raca' => $qte_racas

        ];
    }
}
