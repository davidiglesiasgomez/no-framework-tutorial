<?php declare(strict_types = 1);

namespace NoFrameWorkTutorial\Template;

use NoFrameWorkTutorial\Menu\MenuReader;

class FrontendMustacheRenderer implements FrontendRenderer
{
    private $renderer;
    private $menuReader;

    public function __construct(
        Renderer $renderer,
        MenuReader $menuReader
    ) {
        $this->renderer = $renderer;
        $this->menuReader = $menuReader;
    }

    public function render($template, $data = []) : string
    {
        $data = array_merge($data, [
            'menuItems' => $this->menuReader->readMenu(),
            'enviroment' => $_ENV['ENVIROMENT'],
        ]);
        return $this->renderer->render($template, $data);
    }
}