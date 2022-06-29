<?php

namespace App\Entity;

use App\Repository\ActionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ActionRepository::class)]
class Action
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $name;

    #[ORM\Column(type: 'integer')]
    private $start;

    #[ORM\Column(type: 'integer')]
    private $end;

    #[ORM\Column(type: 'string', length: 255)]
    private $action_one;

    #[ORM\Column(type: 'string', length: 255)]
    private $action_one_value;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $action_two;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $action_two_value;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getStart(): ?int
    {
        return $this->start;
    }

    public function setStart(int $start): self
    {
        $this->start = $start;

        return $this;
    }

    public function getEnd(): ?int
    {
        return $this->end;
    }

    public function setEnd(int $end): self
    {
        $this->end = $end;

        return $this;
    }

    public function getActionOne(): ?string
    {
        return $this->action_one;
    }

    public function setActionOne(string $action_one): self
    {
        $this->action_one = $action_one;

        return $this;
    }

    public function getActionOneValue(): ?string
    {
        return $this->action_one_value;
    }

    public function setActionOneValue(string $action_one_value): self
    {
        $this->action_one_value = $action_one_value;

        return $this;
    }

    public function getActionTwo(): ?string
    {
        return $this->action_two;
    }

    public function setActionTwo(?string $action_two): self
    {
        $this->action_two = $action_two;

        return $this;
    }

    public function getActionTwoValue(): ?string
    {
        return $this->action_two_value;
    }

    public function setActionTwoValue(?string $action_two_value): self
    {
        $this->action_two_value = $action_two_value;

        return $this;
    }

    public function asArray(): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'start' => $this->start,
            'end' => $this->end,
            'action_one' => $this->action_one,
            'action_one_value' => $this->action_one_value,
            'action_two' => $this->action_two,
            'action_two_value' =>  $this->action_two_value
        ];
    }

}
