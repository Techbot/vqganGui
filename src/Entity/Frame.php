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

    #[ORM\Column(type: 'integer')]
    private $ITER;

    #[ORM\Column(type: 'integer')]
    private $word_one;

    #[ORM\Column(type: 'integer')]
    private $word_two;

    #[ORM\Column(type: 'integer')]
    private $word_three;

    #[ORM\Column(type: 'integer')]
    private $word_four;

    #[ORM\Column(type: 'integer')]
    private $word_five;

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

    public function getIter(): ?int
    {
        return $this->ITER;
    }

    public function setIter(string $ITER): self
    {
        $this->ITER = $ITER;

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
            'destination' => $this->DESTINATION,
            'iter' => $this->ITER,
        ];
    }

    public function getWordOne(): ?int
    {
        return $this->word_one;
    }

    public function setWordOne(int $word_one): self
    {
        $this->word_one = $word_one;

        return $this;
    }

    public function getWordTwo(): ?int
    {
        return $this->word_two;
    }

    public function setWordTwo(int $word_two): self
    {
        $this->word_two = $word_two;

        return $this;
    }

    public function getWordThree(): ?int
    {
        return $this->word_three;
    }

    public function setWordThree(int $word_three): self
    {
        $this->word_three = $word_three;

        return $this;
    }

    public function getWordFour(): ?int
    {
        return $this->word_four;
    }

    public function setWordFour(int $word_four): self
    {
        $this->word_four = $word_four;

        return $this;
    }

    public function getWordFive(): ?int
    {
        return $this->word_five;
    }

    public function setWordFive(int $word_five): self
    {
        $this->word_five = $word_five;

        return $this;
    }


}
