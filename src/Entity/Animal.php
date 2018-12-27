<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AnimalRepository")
 */
class Animal
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     * 
     * @ORM\Column(type="string", length=50)
     */
    private $nome;

    /**
     * @var date
     * 
     * @ORM\Column(type="date")
     * 
     */
    private $data_nascimento;

    /**
     * @var object
     * 
     * @ORM\ManyToMany(targetEntity="App\Entity\Cliente", mappedBy="animal")
     * 
     */
    private $cliente;

    /**
     * @var object
     * 
     * @ORM\ManyToOne(targetEntity="App\Entity\Raca", inversedBy="id")
     */
    private $raca;


    

    /**
     * Get the value of data_nascimento
     *
     * @return  date
     */ 
    public function getDataNascimento()
    {
        return $this->data_nascimento;
    }

    /**
     * Set the value of data_nascimento
     *
     * @param  date  $data_nascimento
     *
     * @return  self
     */ 
    public function setDataNascimento($data_nascimento)
    {
        $this->data_nascimento = $data_nascimento;

        return $this;
    }

    /**
     * Get the value of nome
     *
     * @return  string
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @param  string  $nome
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of cliente
     *
     * @return  object
     */ 
    public function getCliente()
    {
        return $this->cliente;
    }

    /**
     * Set the value of cliente
     *
     * @param  object  $cliente
     *
     * @return  self
     */ 
    public function setCliente($cliente)
    {
        $this->cliente = $cliente;

        return $this;
    }

    /**
     *
     * @return  object
     */ 
    public function getRaca()
    {
        return $this->raca;
    }

    /**
     *
     * @param  object  $raca
     *
     * @return  Animal
     */ 
    public function setRaca($raca)
    {
        $this->raca = $raca;

        return $this;
    }
}
