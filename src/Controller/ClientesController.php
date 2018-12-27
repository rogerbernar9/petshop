<?php

namespace App\Controller;

use App\Entity\Cliente;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\VarDumper\VarDumper;

class ClientesController extends AbstractController
{
    /**
     * @Route("/clientes", name="listar_clientes")
     * @Template("clientes/index.html.twig")
     */
    public function index()
    {
        $em = $this->getDoctrine()->getManager();
        $clientes = $em->getRepository(Cliente::class)->findAll();;

        return  [
            'clientes' => $clientes
        ];
    }

//    /**
//     * @Route("/cliente/visualizar/{id}", name="visualizar_cliente")
//     * @Template("clientes/view.html.twig")
//     * @param Cliente $cliente
//     */
//    public function view(Cliente $cliente)
//    {
//        VarDumper::dump($cliente);
//        exit;
//    }

    /**
     * @Route("/cliente/visualizar/{id}", name="visualizar_cliente")
     * @Template("clientes/view.html.twig")
     * @param Cliente $cliente
     * @return array
    */
    public function view(Cliente $cliente)
        {
            return  [
                'cliente' =>$cliente
            ];
        }

}
