<?php declare(strict_types = 1);

namespace NoFrameWorkTutorial\Menu;

interface MenuReader
{
    public function readMenu() : array;
}