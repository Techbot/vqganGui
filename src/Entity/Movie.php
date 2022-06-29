<?php

namespace App\Entity;

use App\Repository\MovieRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MovieRepository::class)]
class Movie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $server;

    #[ORM\Column(type: 'string', length: 255)]
    private $optimiser;

    #[ORM\Column(type: 'integer')]
    private $iterations;

    #[ORM\Column(type: 'float')]
    private $learning_rate;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getServer(): ?string
    {
        return $this->server;
    }

    public function setServer(string $server): self
    {
        $this->server = $server;

        return $this;
    }

    public function getOptimiser(): ?string
    {
        return $this->optimiser;
    }

    public function setOptimiser(string $optimiser): self
    {
        $this->optimiser = $optimiser;

        return $this;
    }

    public function getIterations(): ?int
    {
        return $this->iterations;
    }

    public function setIterations(int $iterations): self
    {
        $this->iterations = $iterations;

        return $this;
    }

    public function getLearningRate(): ?float
    {
        return $this->learning_rate;
    }

    public function setLearningRate(float $learning_rate): self
    {
        $this->learning_rate = $learning_rate;

        return $this;
    }


    public function asArray(): array
    {
        return [
            'id' => $this->id,
            'server' => $this->server,
            'iterations' => $this->iterations,
            'learning_rate' => $this->learning_rate
        ];
    }


}
