<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Expdocente
 *
 * @ORM\Table(name="expdocente", indexes={@ORM\Index(name="fk_expdocente_hojavida", columns={"hojaVida_id"})})
 * @ORM\Entity
 */
class Expdocente
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
     * @var \DateTime
     *
     * @ORM\Column(name="fechaIngreso", type="date", nullable=false)
     */
    private $fechaingreso;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaRetiro", type="date", nullable=false)
     */
    private $fecharetiro;

    /**
     * @var \Hojavida
     *
     * @ORM\ManyToOne(targetEntity="Hojavida")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="hojaVida_id", referencedColumnName="id")
     * })
     */
    private $hojavida;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFechaingreso(): ?\DateTimeInterface
    {
        return $this->fechaingreso;
    }

    public function setFechaingreso(\DateTimeInterface $fechaingreso): self
    {
        $this->fechaingreso = $fechaingreso;

        return $this;
    }

    public function getFecharetiro(): ?\DateTimeInterface
    {
        return $this->fecharetiro;
    }

    public function setFecharetiro(\DateTimeInterface $fecharetiro): self
    {
        $this->fecharetiro = $fecharetiro;

        return $this;
    }

    public function getHojavida(): ?Hojavida
    {
        return $this->hojavida;
    }

    public function setHojavida(?Hojavida $hojavida): self
    {
        $this->hojavida = $hojavida;

        return $this;
    }


}
