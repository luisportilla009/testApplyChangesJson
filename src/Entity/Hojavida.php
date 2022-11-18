<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Hojavida
 *
 * @ORM\Table(name="hojavida")
 * @ORM\Entity
 */
class Hojavida
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="genero", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $genero;

    /**
     * @var string
     *
     * @ORM\Column(name="estadoCivil", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $estadocivil;

    /**
     * @var array
     *
     * @ORM\Column(name="referencias", type="json", length=0, nullable=false)
     */
    private $referencias;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGenero(): ?string
    {
        return $this->genero;
    }

    public function setGenero(string $genero): self
    {
        $this->genero = $genero;

        return $this;
    }

    public function getEstadocivil(): ?string
    {
        return $this->estadocivil;
    }

    public function setEstadocivil(string $estadocivil): self
    {
        $this->estadocivil = $estadocivil;

        return $this;
    }

    public function getReferencias(): ?array
    {
        return $this->referencias;
    }

    public function setReferencias(array $referencias): self
    {
        $this->referencias = $referencias;

        return $this;
    }


}
