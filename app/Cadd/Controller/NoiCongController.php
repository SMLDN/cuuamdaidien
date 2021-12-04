<?php

namespace Cadd\Controller;

use Latte\Engine;
use Cadd\Model\Inner;
use Aloha\Utility\Str;
use Cadd\Model\School;
use Aloha\Helper\Response;
use Slim\Routing\RouteParser;
use Aloha\Utility\CollectionUtil;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class NoiCongController
{
    private $view;
    private $r;

    public function __construct(Engine $view, RouteParser $r)
    {
        $this->view = $view;
        $this->r = $r;
    }

    public function index(ServerRequestInterface $request, ResponseInterface $response, $args)
    {
        $response = new Response();
        $params = [
            "data" => [
                [
                    "id" => 1,
                    "name" => "Thiếu Lâm",
                    "type" => "0",
                    "slug" => "thieu-lam",
                    "innerList" => [
                        [
                            "id" => 1,
                            "name" => "Thiền Định Công"
                        ],
                        [
                            "id" => 2,
                            "name" => "Nhị Chỉ Thiền"
                        ]
                    ]
                ],
                [
                    "id" => 2,
                    "name" => "Võ Đang",
                    "type" => "0",
                    "slug" => "vo-dang",
                    "innerList" => [
                        [
                            "id" => 1,
                            "name" => "Lưỡng Nghi Hộ Tâm Công"
                        ]
                    ]
                ]
            ]
        ];


        $schoolCollection = School::with("inner")->get();
        $schoolList = CollectionUtil::toArrayCamel($schoolCollection, [], ["inner"]);
        // dd($schoolList);

        $params = ["data" => $schoolList];


        $response->getBody()->write($this->view->renderToString("noicong.html", $params));
        return $response;
    }

    public function detail(ServerRequestInterface $request, ResponseInterface $response, $args)
    {
        $inner = $args["inner"];
        $level = $args["level"] ?? 1;
        if ($level <= 0) {
            $level = 1;
        }
        $response = new Response();
        if (Str::notEmpty($inner)) {
            $schoolCollection = School::with("inner")->orderBy("id")->get();
            $schoolList = CollectionUtil::toArrayCamel($schoolCollection, [], ["inner"]);
    
            $inner = Inner::with(["detail", "school"])->where("slug", "=", $inner)->orderBy("id")->firstOrFail();
            if ($inner != null && $level <= count($inner->detail)) {
                $detail = $inner->detail[$level - 1];
                $effect = json_decode($inner->effect, false);
                $effectExt = json_decode($inner->effectExt, false);
                $currentLevel = $detail->level;
                // dd($effectExt);
                // dd($inner->effectExt);
                // dd($effect);

                // dd($);
                $response->getBody()->write($this->view->renderToString("noicong/detail.html", [
                    "detail" => $detail,
                    "inner" => $inner,
                    "effectInfo" => $effect ? $effect[$detail->effectLevel] : null,
                    "effectExtInfo" => $effectExt ? $effectExt[$detail->effectLevel] : null,
                    "nextLevelUrl" => $inner->maxLevel - 1 >= $currentLevel ? $this->r->relativeUrlFor("noi-cong.detail", ["inner" => $inner->slug, "level" => ($detail->level) + 1]) : "",
                    "prevLevelUrl" => $currentLevel > 1 ? $this->r->relativeUrlFor("noi-cong.detail", ["inner" => $inner->slug, "level" => ($detail->level) - 1]) : "",
                    "levelUrl" => $this->r->relativeUrlFor("noi-cong.detail0", ["inner" => $inner->slug]),
                    "imageUrl" => "/static/img/noi-cong/" . $inner->school->slug . "-" . $inner->rank . ".png",
                    "typeName" => $inner->type == '0' ? "Dương Cương" : ($inner->type == '1' ? "Âm Nhu" : "Thái Cực"),
                    "schoolList" => $schoolList
                ]));
                return $response;
            }
        }
        return $response->withError("Trang không tồn tại!");
    }
}
