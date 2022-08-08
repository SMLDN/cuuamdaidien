<?php

namespace Cadd\Controller;

use Latte\Engine;
use Cadd\Model\Inner;
use Aloha\Utility\Str;
use Cadd\Model\School;
use Cadd\Model\KinhMach;
use Aloha\Helper\Response;
use Slim\Routing\RouteParser;
use Aloha\Utility\CollectionUtil;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class KinhMachController
{
    private $view;
    private $r;

    public function __construct(Engine $view, RouteParser $r)
    {
        $this->view = $view;
        $this->r = $r;
    }

    public function detail(ServerRequestInterface $request, ResponseInterface $response, $args)
    {
        $kinhMach = $args["kinhMach"];
        $level = $args["level"] ?? 1;
        if ($level <= 0) {
            $level = 1;
        }
        $response = new Response();

        $kinhMach = KinhMach::with(["detail"])->where("slug", "=", $kinhMach)->orderBy("id")->firstOrFail();
        dd($kinhMach->detail[$level - 1]->khiHuyet);

        // return $response;
        return $response->withNotFound("Rồi rồi kinh mạch ok");
        // return $response->withNotFound("Trang không tồn tại!");
    }
}
