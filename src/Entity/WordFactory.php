<?php
namespace App\Entity;

use App\Entity\Frame;

class WordFactory
{
    public static function create(
        string $title,

    ): Frame
    {
        $frame = new Frame();
        $frame->setName($title);
        $frame->setFilename($content);

        return $frame;
    }
}
