<?php


namespace App\Services;


class PageMaker
{
    /**
     * @var HeadMaker
     */
    private $headMaker;
    /**
     * @var BodyMaker
     */
    private $bodyMaker;

    /**
     * PageMaker constructor.
     * @param HeadMaker $headMaker
     * @param BodyMaker $bodyMaker
     */
    public function __construct(HeadMaker $headMaker, BodyMaker $bodyMaker)
    {
        $this->headMaker = $headMaker;
        $this->bodyMaker = $bodyMaker;
    }

    public function makeHead()
    {
        return $this->headMaker->make();
    }

    public function makeBody()
    {
        return $this->bodyMaker->make();
    }
}
