<?php
namespace App\Entity;

use App\Entity\Frame;

class ActionFactory
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
        $frame->setTEXT($TEXT);
        $frame->setOPTIMISER($OPTIMISER);
        $frame->setLR($LR);
        $frame->setIMAXEPOCHS($IMAXEPOCHS);
        $frame->setSeMAXEPOCHS($eMAXEPOCHS);
        $frame->setSEED($SEED);
        $frame->setDESTINATION($DESTINATION);
        return $frame;
    }
}
