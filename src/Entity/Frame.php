<?php

namespace App\Entity;

use App\Repository\FrameRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FrameRepository::class)]
class Frame
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $name;

    #[ORM\Column(type: 'string', length: 255)]
    private $filename;

    #[ORM\Column(type: 'string', length: 255)]
    private $TEXT;

    #[ORM\Column(type: 'string', length: 255)]
    private $OPTIMISER;

    #[ORM\Column(type: 'string', length: 255)]
    private $LR;

    #[ORM\Column(type: 'integer')]
    private $iMAX_EPOCHS;

    #[ORM\Column(type: 'integer')]
    private $seMAX_EPOCHS;

    #[ORM\Column(type: 'integer')]
    private $SEED;

    #[ORM\Column(type: 'string', length: 255)]
    private $DESTINATION;

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

    public function getFilename(): ?string
    {
        return $this->filename;
    }

    public function setFilename(string $filename): self
    {
        $this->filename = $filename;

        return $this;
    }

    public function getTEXT(): ?string
    {
        return $this->TEXT;
    }

    public function setTEXT(string $TEXT): self
    {
        $this->TEXT = $TEXT;

        return $this;
    }

    public function getOPTIMISER(): ?string
    {
        return $this->OPTIMISER;
    }

    public function setOPTIMISER(string $OPTIMISER): self
    {
        $this->OPTIMISER = $OPTIMISER;

        return $this;
    }

    public function getLR(): ?string
    {
        return $this->LR;
    }

    public function setLR(string $LR): self
    {
        $this->LR = $LR;

        return $this;
    }

    public function getIMAXEPOCHS(): ?int
    {
        return $this->iMAX_EPOCHS;
    }

    public function setIMAXEPOCHS(int $iMAX_EPOCHS): self
    {
        $this->iMAX_EPOCHS = $iMAX_EPOCHS;

        return $this;
    }

    public function getSeMAXEPOCHS(): ?int
    {
        return $this->seMAX_EPOCHS;
    }

    public function setSeMAXEPOCHS(int $seMAX_EPOCHS): self
    {
        $this->seMAX_EPOCHS = $seMAX_EPOCHS;

        return $this;
    }

    public function getSEED(): ?int
    {
        return $this->SEED;
    }

    public function setSEED(int $SEED): self
    {
        $this->SEED = $SEED;

        return $this;
    }

    public function getDESTINATION(): ?string
    {
        return $this->DESTINATION;
    }

    public function setDESTINATION(string $DESTINATION): self
    {
        $this->DESTINATION = $DESTINATION;

        return $this;
    }


    public function asArray(): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'filename' => $this->filename,
            'text' => $this->TEXT,
            'optimiser' => $this->OPTIMISER,
            'LR' => $this->LR,
            'maxEpochs' => $this->iMAX_EPOCHS,
            'seEpochs' =>  $this->seMAX_EPOCHS,
            'seed' => $this->SEED,
            'destination' => $this->DESTINATION
        ];
    }


}
