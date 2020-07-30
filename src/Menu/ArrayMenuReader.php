<?php declare(strict_types = 1);

namespace NoFrameWorkTutorial\Menu;

class ArrayMenuReader implements MenuReader
{
    public function readMenu() : array
    {
        return [
            ['href' => '/', 'text' => 'Homepage'],
            ['href' => '/hello', 'text' => 'Hello'],
            ['href' => '/tatata', 'text' => 'Tatata'],
        ];
    }
}