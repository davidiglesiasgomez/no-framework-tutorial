<?php declare(strict_types = 1);

namespace NoFrameWorkTutorial\Menu;

class ArrayMenuReader implements MenuReader
{
    public function readMenu() : array
    {
        return [
            ['href' => '/', 'text' => 'Homepage'],
            ['href' => '/page-01', 'text' => 'Page 01'],
            ['href' => '/page-02', 'text' => 'Page 02'],
        ];
    }
}