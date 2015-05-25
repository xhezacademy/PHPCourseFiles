<?php

/**
 *
 */
class Snake extends Animal implements ReptileInterface
{
    public function crawl()
    {
        do {
            echo 'crawling...';
            $i++;
        } while ($i <= 11);
    }

    public function setNumberOfLegs($legs)
    {
        $this->numberOfLegs = $legs;
    }
}
