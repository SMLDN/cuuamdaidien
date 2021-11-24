<?php


use Phinx\Seed\AbstractSeed;

class School extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     */
    public function run()
    {
        $data = [
            [
                "name" => "Thiếu Lâm",
                "type" => "0",
                "slug" => "thieu-lam",
            ],
            [
                "name" => "Võ Đang",
                "type" => "0",
                "slug" => "vo-dang",
                
            ],
            [
                "name" => "Nga My",
                "type" => "0",
                "slug" => "nga-my",
            ],
            [
                "name" => "Cái Bang",
                "type" => "0",
                "slug" => "cai-bang",
            ],
            [
                "name" => "Đường Môn",
                "type" => "0",
                "slug" => "duong-mon",
            ],
            [
                "name" => "Cực Lạc Cốc",
                "type" => "0",
                "slug" => "cuc-lac-coc",
            ],
            [
                "name" => "Cẩm Y Vệ",
                "type" => "0",
                "slug" => "cam-y-ve",
            ],
            [
                "name" => "Quân Tử Đường",
                "type" => "0",
                "slug" => "quan-tu-duong",
            ],
            [
                "name" => "Minh Giáo",
                "type" => "0",
                "slug" => "minh-giao",
            ],
            [
                "name" => "Thiên Sơn",
                "type" => "0",
                "slug" => "thien-son",
            ],
            // -----
            [
                "name" => "Kim Châm Thẩm Gia",
                "type" => "1",
                "slug" => "kim-cham-tham-gia",
            ],
            [
                "name" => "Di Hoa Cung",
                "type" => "1",
                "slug" => "di-hoa-cung",
            ],
            [
                "name" => "Từ Gia Trang",
                "type" => "1",
                "slug" => "tu-gia-trang",
            ],
            [
                "name" => "Vô Căn Môn",
                "type" => "1",
                "slug" => "vo-can-mon",
            ],
            [
                "name" => "Đào Hoa Đảo",
                "type" => "1",
                "slug" => "dao-hoa-dao",
            ],
            // ----
            [
                "name" => "Huyết Đao Môn",
                "type" => "2",
                "slug" => "huyet-dao-mon",
            ],
            [
                "name" => "Cổ Mộ",
                "type" => "2",
                "slug" => "co-mo",
            ],
            [
                "name" => "Trường Phong Tiêu Cục",
                "type" => "2",
                "slug" => "truong-phong-tieu-cuc",
            ],
            [
                "name" => "Niệm La Bá",
                "type" => "2",
                "slug" => "niem-la-ba",
            ],
            [
                "name" => "Thần Thủy Cung",
                "type" => "2",
                "slug" => "than-thuy-cung",
            ],
            [
                "name" => "Hoa Sơn",
                "type" => "2",
                "slug" => "hoa-son",
            ],
            [
                "name" => "Ngũ Tiên",
                "type" => "2",
                "slug" => "ngu-tien",
            ],
            [
                "name" => "Đạt Ma",
                "type" => "2",
                "slug" => "dat-ma",
            ],
            [
                "name" => "Thần Cơ Doanh",
                "type" => "2",
                "slug" => "than-co-doanh",
            ],
            //---
            [
                "id" => 99,
                "name" => "Giang Hồ",
                "type" => "3",
                "slug" => "giang-ho",
            ],
        ];
        $table = $this->table("school");
        $table->truncate();

        foreach ($data as $d) {
            $d["created_at"] = date("Y-m-d H:i:s");
            $d["updated_at"] = date("Y-m-d H:i:s");
            $table->insert($d)
                ->save();
        }
    }
}
