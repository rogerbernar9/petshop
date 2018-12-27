<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RacaRepository")
 */
class Raca
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
     * 
     */

    private $nome;

    /**
     * @var object
     * 
     * @ORM\ManyToOne(targetEntity="App\Entity\Especie", inversedBy="id") 
     * 
     */
    private $especie;





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
     * @return string
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param string $nome
     *
     * @return Raca
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     *
     * @return  object
     */ 
    public function getEspecie()
    {
        return $this->especie;
    }

    /**
     * Set the value of especie
     *
     * @param  object  $especie
     * @return Raca
     */ 
    public function setEspecie(object $especie)
    {
        $this->especie = $especie;

        return $this;
    }

    public function getNomeEspecie()
    {
        return $this->getEspecie() ? $this->getEspecie()->getNome():null;
    }
}
