<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProdutoRepository")
 */
class Produto
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @var string
     * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank(message="Campo nome não pode ser vazio!")
     */
    private $nome;


    /**
     * @var float 
     * @ORM\Column(type="decimal", scale=2)
     * @Assert\NotBlank(message="Campo preço não pode ser vazio!")
     */
    private $preco;

    /**
     * @var string
     * 
     * @ORM\Column(type="text")
     * @Assert\NotBlank(message="Campo descrição não pode ser vazio!")
     */
    private $descricao;

    /**
     * @return mixed
     * 
     *      
     */
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id=$id;
        return $this;
    }


    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome=$nome;
        return $this;
    }

    public function getPreco()
    {
        return $this->preco;
    }

    public function setPreco($preco)
    {
        $this->preco=$preco;
        return $this;
    }

    public function setDescricao($descricao)
    {
        $this->descricao=$descricao;
        return $this;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

}
