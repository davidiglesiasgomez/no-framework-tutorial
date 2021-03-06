<?php declare(strict_types = 1);

namespace NoFrameWorkTutorial\Controllers;

use Http\Request;
use Http\Response;
use NoFrameWorkTutorial\Template\FrontendRenderer;

class HomepageShow
{
    private $request;
    private $response;
    private $renderer;

    public function __construct(
        Request $request, 
        Response $response,
        FrontendRenderer $renderer
    ) {
        $this->request = $request;
        $this->response = $response;
        $this->renderer = $renderer;
    }

    public function __invoke()
    {
        $data = [
            'name' => $this->request->getParameter('name', 'stranger'),
        ];
        $html = $this->renderer->render('Homepage', $data);
        $this->response->setContent($html);
    }
}