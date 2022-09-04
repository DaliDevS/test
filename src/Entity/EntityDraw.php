<?php

namespace App\Entity;

use App\Repository\EntityDrawRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ApiResource
 * @ORM\Entity(repositoryClass=EntityDrawRepository::class)
 */
class EntityDraw
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(name="id",type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $eid;

    /**
     * @ORM\Column(type="datetime")
     */
    private $drawn_at;


    public function __construct()
    {
        $this->result = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEid(): ?int
    {
        return $this->eid;
    }

    public function setEid(int $eid): self
    {
        $this->eid = $eid;

        return $this;
    }

    public function getDrawnAt(): ?\DateTimeInterface
    {
        return $this->drawn_at;
    }

    public function setDrawnAt(\DateTimeInterface $drawn_at): self
    {
        $this->drawn_at = $drawn_at;

        return $this;
    }

}
