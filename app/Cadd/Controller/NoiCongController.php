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

    /** hiện k xài */
    public function index(ServerRequestInterface $request, ResponseInterface $response, $args)
    {
        $response = new Response();
        // $params = [
        //     "data" => [
        //         [
        //             "id" => 1,
        //             "name" => "Thiếu Lâm",
        //             "type" => "0",
        //             "slug" => "thieu-lam",
        //             "innerList" => [
        //                 [
        //                     "id" => 1,
        //                     "name" => "Thiền Định Công"
        //                 ],
        //                 [
        //                     "id" => 2,
        //                     "name" => "Nhị Chỉ Thiền"
        //                 ]
        //             ]
        //         ],
        //         [
        //             "id" => 2,
        //             "name" => "Võ Đang",
        //             "type" => "0",
        //             "slug" => "vo-dang",
        //             "innerList" => [
        //                 [
        //                     "id" => 1,
        //                     "name" => "Lưỡng Nghi Hộ Tâm Công"
        //                 ]
        //             ]
        //         ]
        //     ]
        // ];

        $schoolCollection = School::with("inner")->orderBy("order_num")->get();
        $schoolList = CollectionUtil::toArrayCamel($schoolCollection, [], ["inner"]);
        // dd($schoolList);

        $params = ["data" => $schoolList];


        $response->getBody()->write($this->view->renderToString("noicong.html", $params));
        return $response;
    }

    private function getInnerDetail($detail){
        $thucLuc = "Bất Kham Nhất Kích";
        if($detail->point > 5){
            $thucLuc = "Sơ Học Sạ Luyện";
        }

        if($detail->point > 10){
            $thucLuc = "Sơ Khuy Môn Kính";
        }

        if($detail->point > 15){
            $thucLuc = "Lực Hữu Tiểu Thành";
        }

        if($detail->point > 20){
            $thucLuc = "Giá Khinh Tựu Thực";
        }

        if($detail->point > 25){
            $thucLuc = "Dung Hội Quán Thông";
        }

        if($detail->point > 30){
            $thucLuc = "Lô Hỏa Thuần Thanh";
        }

        if($detail->point > 35){
            $thucLuc = "Kỳ Tài Xuất Chúng";
        }

        if($detail->point > 40){
            $thucLuc = "Thần Hồ Kỳ Kỹ";
        }

        if($detail->point > 45){
            $thucLuc = "Xuất Thần Nhập Hóa";
        }

        if($detail->point > 50){
            $thucLuc = "Ngạo Thị Quần Hùng";
        }

        if($detail->point > 55){
            $thucLuc = "Đăng Phong Tạo Cực";
        }

        if($detail->point > 60){
            $thucLuc = "Vô Dữ Luận Tỉ";
        }

        if($detail->point > 65){
            $thucLuc = "Sở Hướng Phí Mị";
        }

        if($detail->point > 70){
            $thucLuc = "Nhất Đại Tôn Sư";
        }

        if($detail->point > 75){
            $thucLuc = "Thần Công Cái Thế";
        }

        if($detail->point > 80){
            $thucLuc = "Cử Thế Vô Song";
        }

        if($detail->point > 85){
            $thucLuc = "Kinh Thế Hãi Tục";
        }

        if($detail->point > 90){
            $thucLuc = "Kinh Thiên Động Địa";
        }

        if($detail->point > 95){
            $thucLuc = "Chấn Cổ Thước Kim";
        }

        if($detail->point > 100){
            $thucLuc = "Siêu Phàm Nhập Thánh";
        }

        if($detail->point > 105){
            $thucLuc = "Uy Trấn Hoàn Vũ";
        }

        if($detail->point > 110){
            $thucLuc = "Vô Tiền Khoáng Hậu";
        }

        if($detail->point > 115){
            $thucLuc = "Thiên Nhân Hợp Nhất";
        }

        if($detail->point > 120){
            $thucLuc = "Thâm Tàng Bất Lộ";
        }

        if($detail->point > 135){
            $thucLuc = "Thâm Bất Khả Trắc";
        }

        if($detail->point > 150){
            $thucLuc = "Phản Phác Quy Chân";
        }

        $detail["thucLuc"] = $thucLuc;
        return $detail;
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
            $schoolCollection = School::with("inner")->orderBy("order_num")->get();
            $schoolList = CollectionUtil::toArrayCamel($schoolCollection, [], ["inner"]);
    
            $inner = Inner::with(["detail", "school"])->where("slug", "=", $inner)->orderBy("id")->firstOrFail();
            if ($inner != null && $level <= count($inner->detail)) {
                $detail = $this->getInnerDetail($inner->detail[$level - 1]);
                $effect = json_decode($inner->effect, false);
                $effectExt = json_decode($inner->effectExt, false);
                $currentLevel = $detail->level;
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
        return $response->withNotFound("Trang không tồn tại!");
    }
}
