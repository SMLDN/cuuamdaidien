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

        $kinhMach = KinhMach::with(["detail", "school"])->where("slug", "=", $kinhMach)->orderBy("id")->firstOrFail();

        $response = new Response();
        if (Str::notEmpty($kinhMach)) {
            $kinhMachList = CollectionUtil::toArrayCamel(KinhMach::orderBy("order_num")->get());

            if ($kinhMach != null && $level <= count($kinhMach->detail)) {
                $detail = $kinhMach->detail[$level - 1];
                $currentLevel = $detail->level;
                $response->getBody()->write($this->view->renderToString("kinhmach/detail.html", [
                    "detail" => $detail,
                    "chiSo" => $this->getChiSo($detail),
                    "kinhMach" => $kinhMach,
                    "nextLevelUrl" => $kinhMach->maxLevel - 1 >= $currentLevel ? $this->r->relativeUrlFor("kinh-mach.detail", ["kinhMach" => $kinhMach->slug, "level" => ($detail->level) + 1]) : "",
                    "prevLevelUrl" => $currentLevel > 1 ? $this->r->relativeUrlFor("kinh-mach.detail", ["kinhMach" => $kinhMach->slug, "level" => ($detail->level) - 1]) : "",
                    "levelUrl" => $this->r->relativeUrlFor("kinh-mach.detail0", ["kinhMach" => $kinhMach->slug]),
                    "imageUrl" => "/static/img/kinh-mach/" . $kinhMach->slug . ".png",
                    "schoolName" => $kinhMach->school->name,
                    "kinhMachList" => $kinhMachList
                ]));
                return $response;
            }
        }
        return $response->withNotFound("Trang không tồn tại!");
    }

    protected function getChiSo($detail)
    {
        $dtl = $detail->getAttributesCamel();
        $r = [];
        foreach ($dtl as $d => $c) {
            if ($c != null and !Str::equal($d, "id") and !Str::equal($d, "kinhMachId") and !Str::equal($d, "level") and !Str::equal($d, "chanKhiTienCap") and !Str::equal($d, "chanKhiTong") and !Str::equal($d, "updatedAt") and !Str::equal($d, "createdAt")) {
                $r[$d] = $c;
            }
        }
        return $r;
    }
}
