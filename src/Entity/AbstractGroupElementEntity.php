<?php

declare(strict_types=1);

/*
 * @author  Moritz Vondano
 * @license MIT
 */

namespace Mvo\ContaoGroupWidget\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\MappedSuperclass()
 */
class AbstractGroupElementEntity implements GroupElementEntityInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(name="id", type="integer")
     */
    protected $id;

    /**
     * @ORM\Column(name="position", type="integer")
     */
    protected $position;

    /**
     * Add your own ORM\Column definition for the child elements when extending this class.
     *
     * Example:
     *   > ORM\ManyToOne(targetEntity=MyGroup::class, inversedBy="elements")
     *   > ORM\JoinColumn(nullable=false)
     */
    protected $parent;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getParent(): ?GroupEntityInterface
    {
        return $this->parent;
    }

    public function setParent(?GroupEntityInterface $parent): self
    {
        $this->parent = $parent;

        return $this;
    }

    public function getPosition(): ?int
    {
        return $this->position;
    }

    public function setPosition(int $position): self
    {
        $this->position = $position;

        return $this;
    }
}