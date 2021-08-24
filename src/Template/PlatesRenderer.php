<?php declare(strict_types = 1);

namespace NoFrameWorkTutorial\Template;

use \League\Plates\Engine as Plates_Engine;

class PlatesRenderer implements Renderer
{
    private $engine;

    public function __construct(Plates_Engine $engine)
    {
        $this->engine = $engine;
    }

    public function render($template, $data = []) : string
    {
        // return print_r($data, true);
        return $this->engine->render($template, $data);
    }
}