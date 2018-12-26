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
     * Get the value of data_nascimento
     *
     * @return  date
     */ 
    public function getData_nascimento()
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
    public function setData_nascimento(date $data_nascimento)
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
    public function setNome(string $nome)
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
}
