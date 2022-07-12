<?php
namespace App\Entity;

use App\Entity\Frame;

class MovieFactory
{
    public static function create(
        string $title,
        string $content,
        string $TEXT,
        string $OPTIMISER,
        string $LR,
        string $DESTINATION,

        int $IMAXEPOCHS,
        int $eMAXEPOCHS,
        int $SEED,
    ): Frame
    {
        $frame = new Frame();
        $frame->setName($title);
        $frame->setFilename($content);

        return $frame;
    }
}
