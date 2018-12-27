<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ClienteRepository")
 */
class Cliente
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
     * @var string
     * 
     * @ORM\Column(type="string", length=20)
     */

    private $telefone;


    /**
     * @var string
     * 
     * @ORM\Column(type="string", length=130)
     */

    private $email;

    /**
     * @var object
     * 
     * @ORM\ManyToOne(targetEntity="App\Entity\Endereco", inversedBy="id", cascade={"persist"})
     */
    private $endereco;

    /**
     * @var object
     * 
     * @ORM\ManyToMany(targetEntity="App\Entity\Animal", inversedBy="cliente")
     * @ORM\JoinTable(name="animal_cliente")
     * 
     */
    private $animal;



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
     * Get the value of telefone
     */ 
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * Set the value of telefone
     *
     * @return  self
     */ 
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of animal
     *
     * @return  object
     */ 
    public function getAnimal()
    {
        return $this->animal;
    }

    /**
     * Set the value of animal
     *
     * @param  object  $animal
     *
     * @return  self
     */ 
    public function setAnimal($animal)
    {
        $this->animal = $animal;

        return $this;
    }

    /**
     * Get the value of endereco
     *
     * @return  object
     */ 
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * Set the value of endereco
     *
     * @param  Endereco  $endereco
     *
     * @return  Cliente
     */ 
    public function setEndereco(Endereco $endereco)
    {
        $this->endereco = $endereco;

        return $this;
    }
}
