<?php declare(strict_types = 1);

namespace NoFrameWorkTutorial\Template;

interface Renderer
{
    public function render($template, $data = []) : string;
}