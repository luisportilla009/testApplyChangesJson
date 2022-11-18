<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Materias
 *
 * @ORM\Table(name="materias", indexes={@ORM\Index(name="fk_materias_expdocente", columns={"expDocente_id"})})
 * @ORM\Entity
 */
class Materias
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
     * @ORM\Column(name="nombre", type="string", length=255, nullable=false)
     */
    private $nombre;

    /**
     * @var int
     *
     * @ORM\Column(name="horas", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $horas;

    /**
     * @var \Expdocente
     *
     * @ORM\ManyToOne(targetEntity="Expdocente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="expDocente_id", referencedColumnName="id")
     * })
     */
    private $expdocente;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getHoras(): ?int
    {
        return $this->horas;
    }

    public function setHoras(int $horas): self
    {
        $this->horas = $horas;

        return $this;
    }

    public function getExpdocente(): ?Expdocente
    {
        return $this->expdocente;
    }

    public function setExpdocente(?Expdocente $expdocente): self
    {
        $this->expdocente = $expdocente;

        return $this;
    }


}
