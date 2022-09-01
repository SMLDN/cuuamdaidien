<?php


use Phinx\Seed\AbstractSeed;

class KinhMach extends AbstractSeed
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
                "id" => 1,
                "name" => "Thủ Thái Âm Phế",
                "slug" => "thu-thai-am-phe",
                "school_id" => 3,
                "max_level" => 216,
                "type" => "1", //cuong
                "desc" => "Theo [Linh Khu] ghi chép, đây là mạch chính của Thủ Tam Âm, khống chế thể chất con người. Mạch này yếu thì gầy ốm, mạnh thì cường tráng. Là mạch mà người tập võ phải luyện. Tiến cử người chơi bộ võ nội công (Sát thương Âm, Dương, Cương, Nhu) khai thông",
                "chi_so_tien_cu_noi" => 4,
                "chi_so_tien_cu_ngoai" => 3,
                "chi_so_them" => "Nội Lực: +200",
                "order_num" => 2
            ],
            [
                "id" => 2,
                "name" => "Thủ Thái Âm Phế-Nghịch",
                "slug" => "thu-thai-am-phe-nghich",
                "school_id" => 20,
                "max_level" => 216,
                "type" => "3", //nhu
                "desc" => "Bắt đầu từ phần phổi đoạn giữa dạ dày, trượt xuống Xích Trạch, đi đến Kinh Cừ, nhập vào Ngư Tế, đi đến Thiếu Thương của ngón cái. Tiến cử người chơi bộ nội công (Sát thương âm, dương, cương, nhu) khai thông",
                "chi_so_tien_cu_noi" => 5,
                "chi_so_tien_cu_ngoai" => 3,
                "chi_so_them" => "Nội Lực: +200",
                "order_num" => 3
            ],
            [
                "id" => 3,
                "name" => "Thủ Thiếu Dương Tam Tiêu",
                "slug" => "thu-thieu-duong-tam-tieu",
                "school_id" => 6,
                "max_level" => 216,
                "type" => "0", //duong
                "desc" => "Mạch chính của Thủ Tam Dương, cùng có tên là Liệt Phong Kinh với Túc Thiếu Dương Đảm Kinh. Kiểm soát sức lực toàn thân, mạch này nếu bị thương sẽ dẫn đến kiệt sức, cần bảo vệ cẩn thận. Tiến cử cho người chơi bộ võ nội công (sát thương Âm, Dương, Cương, Nhu) khai thông",
                "chi_so_tien_cu_noi" => 5,
                "chi_so_tien_cu_ngoai" => 1,
                "chi_so_them" => "Hồi Nội Lực: +12",
                "order_num" => 4
            ],
            [
                "id" => 4,
                "name" => "Thủ Thiếu Dương Tam Tiêu-Nghịch",
                "slug" => "thu-thieu-duong-tam-tieu-nghich",
                "school_id" => 22,
                "max_level" => 216,
                "type" => "0", //duong
                "desc" => "Mạch chính của Thủ Tam Dương, cùng có tên là Liệt Phong Kinh với Túc Thiếu Dương Đảm Kinh. Kiểm soát sức lực toàn thân, mạch này nếu bị thương sẽ dẫn đến kiệt sức, cần bảo vệ cẩn thận. Tiến cử cho người chơi bộ võ nội công (sát thương Âm, Dương, Cương, Nhu) khai thông",
                "chi_so_tien_cu_noi" => 5,
                "chi_so_tien_cu_ngoai" => 1,
                "chi_so_them" => "Hồi Nội Lực: +12",
                "order_num" => 4
            ],
        ];
        $table = $this->table("kinh_mach");
        $table->truncate();

        foreach ($data as $d) {
            $d["created_at"] = date("Y-m-d H:i:s");
            $d["updated_at"] = date("Y-m-d H:i:s");
            $table->insert($d)
                ->save();
        }
    }
}
