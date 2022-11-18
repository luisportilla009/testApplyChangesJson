<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Historial
 *
 * @ORM\Table(name="historial", indexes={@ORM\Index(name="fk_historial_user", columns={"user_id"})})
 * @ORM\Entity
 */
class Historial
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
     * @var array
     *
     * @ORM\Column(name="historia", type="json", length=0, nullable=false)
     */
    private $historia;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $estado;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getHistoria(): ?array
    {
        return $this->historia;
    }

    public function setHistoria(array $historia): self
    {
        $this->historia = $historia;

        return $this;
    }

    public function getEstado(): ?string
    {
        return $this->estado;
    }

    public function setEstado(string $estado): self
    {
        $this->estado = $estado;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }


}
