<?php

namespace Cadd\Controller;

use Latte\Engine;
use Aloha\Helper\Response;
use Slim\Routing\RouteParser;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class HomeController {
    private $view;
    private $r;

    public function __construct(Engine $view, RouteParser $r){
        $this->view = $view;
        $this->r = $r;
    }

    public function index(ServerRequestInterface $request, ResponseInterface $response, $args){
        $params =[
            // "noiCongUrl" => $this->r->relativeUrlFor("noi-cong.index")
        ];
        $response = new Response();
        $response->getBody()->write($this->view->renderToString("index.html", $params));
        return $response;
    }
}