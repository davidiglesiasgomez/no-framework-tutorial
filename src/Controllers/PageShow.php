<?php declare(strict_types = 1);

namespace NoFrameWorkTutorial\Controllers;

use Http\Response;
use NoFrameWorkTutorial\Template\FrontendRenderer;
use NoFrameWorkTutorial\Page\PageReader;
use NoFrameWorkTutorial\Page\InvalidPageException;

class PageShow
{
    private $response;
    private $renderer;
    private $pageReader;

    public function __construct(
        Response $response,
        FrontendRenderer $renderer,
        PageReader $pageReader
    ) {
        $this->response = $response;
        $this->renderer = $renderer;
        $this->pageReader = $pageReader;
    }

    public function __invoke($params)
    {
        $slug = $params['slug'];

        try {
            $data['content'] = $this->pageReader->readBySlug($slug);
        } catch (InvalidPageException $e) {
            $this->response->setStatusCode(404);
            return $this->response->setContent('404 - Page not found');
        }
        
        $html = $this->renderer->render('Page', $data);
        $this->response->setContent($html);
    }
}