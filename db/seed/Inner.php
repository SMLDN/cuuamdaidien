<?php


use Phinx\Seed\AbstractSeed;

class Inner extends AbstractSeed
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
                "name" => "Thiền Định Công",
                "slug" => "thien-dinh-cong",
                "max_level" => 36,
                "rank" => 1,
                "max_rage" => 90,
                "school_id" => 1,
                "type" => "0", //duong cuong
                "desc" => 'Tâm Pháp, Thiền Định Diệc Chỉ Quan, Lục Tổ Tọa Thiền Nhi Ngộ là Nội Công cơ bản của Thiếu Lâm, "Thiền Định Giả, cuộc sống bên ngoài không nơi ở không ô nhiễm là Thiền, trong lòng rõ ràng hiểu an cư là Định, cài gọi là Ngoại Thiền Nội Định, là Thiền Định giống như là Dã", Tu tập Giả siêu nhiên nhập cảnh, lưu thông huyết mạch, di dưỡng tâm thần, lấy đây làm cơ sở xây dựng.',
                "effect" => '["","Công kích có xác suất 15% hóa giải một phần tụ huyết","Công kích có xác suất 15% hóa giải một phần tụ huyết","Công kích có xác suất 15% hóa giải một phần tụ huyết","Công kích có xác suất 15% hồi phục ít khí huyết"]',
            ],
            [
                "id" => 2,
                "name" => "Nhị Chỉ Thiền",
                "slug" => "nhi-chi-thien",
                "max_level" => 36,
                "rank" => 2,
                "max_rage" => 100,
                "school_id" => 1,
                "type" => "0", //duong cuong
                "desc" => 'Thiếu Lâm quan trọng Nội Công Tâm Pháp, là Công Pháp của Thuần Dương, Tâm Pháp Mật Quyết ở Đãi Thủ Nhập Tĩnh, tâm không tư lợi, khí đi hết các huyệt, mượt mà thông suốt. Luyện công này đến cảnh giới nhất định, chân khí tuôn trào, tinh lực vô hạn.',
                "effect" => '["","Mỗi lần xuất chiêu, kình khí ở tay có thể chấn thương mục tiêu xung quanh","Mỗi lần xuất chiêu, kình khí ở tay có thể chấn thương mục tiêu xung quanh","Mỗi lần xuất chiêu, kình khí ở tay có thể chấn thương mục tiêu xung quanh","Mỗi lần xuất chiêu kình khí ở tay có thể chấn thương mục tiêu xung quanh, lực tay càng cao, sát thương tăng càng lớn"]',
            ],
            [
                "id" => 3,
                "name" => "La Hán Phục Ma Công",
                "slug" => "la-han-phuc-ma-cong",
                "max_level" => 36,
                "rank" => 3,
                "max_rage" => 110,
                "school_id" => 1,
                "type" => "0", //duong cuong
                "desc" => 'Tập Đại Thành của Thiếu Lâm Nội Công Tâm Pháp, là một trong những bảy mươi hai tuyệt kỹ Thiếu Lâm, chí cương chí mãnh. Trí tuệ bí mật của Kim Cương Dụ Như Lai, thân thể của Ban Nhã, đều kiên cố như Kim Cương, không Vạn Vật nào có thể phá hoại, trí tuệ này.',
                "effect" => '["","Công hàm phật pháp, cảnh thị chúng sinh. Mỗi lần công kích có xác suất khiến bản thân rơi vào cảnh giới \"Chư Tương Phi Tương\", giác ngộ Nhất Tương trong Tứ Tương. (Chỉ có người nghĩa hiệp mới có thể lãnh hội tầng cảnh giới này)","Công hàm phật pháp, cảnh thị chúng sinh. Mỗi lần công kích đều có xác suất khiến bản thân tiến vào cảnh giới \"Chư Tương Phi Tương\", giác ngộ Nhất Tương trong Tứ Tương. Có xác suất giác ngộ Nhị Tương trong đó(Chỉ có người nghĩa hiệp mới có thể lãnh hội tầng cảnh giới này)","Công hàm phật pháp, cảnh thị chúng sinh. Mỗi lần công kích đều có xác suất khiến bản thân tiến vào cảnh giới \"Chư Tương Phi Tương\", giác ngộ Nhất Tương trong Tứ Tương. Có xác suất giác ngộ Tam Tương trong đó(Chỉ có người nghĩa hiệp mới có thể lãnh hội tầng cảnh giới này)","Công hàm phật pháp, cảnh thị chúng sinh. Mỗi lần công kích đều có xác suất khiến bản thân tiến vào cảnh giới \"Chư Tương Phi Tương\", giác ngộ Nhất Tương trong Tứ Tương. Có xác suất giác ngộ Tứ Tương trong đó(Chỉ có người nghĩa hiệp mới có thể lãnh hội tầng cảnh giới này)"]',
            ],

            [
                "id" => 4,
                "name" => "Chiên Đàn Thần Công",
                "slug" => "chien-dan-than-cong",
                "max_level" => 49,
                "rank" => 4,
                "max_rage" => 120,
                "school_id" => 1,
                "type" => "0", //duong cuong
                "desc" => 'Độc môn kì công Thiếu Lâm, công pháp lấy từ Thụ Ký Chiên Đàn Phật, công lực này có thể trừ tà, hộ thể cường thân, khi gặp địch, nếu hương đàn hương vẫn còn thì có thể hóa dữ thành lành.',
                "effect" => '["", "Khi bị công kích, có xác suất giảm 30% sát thương lần này, đồng thời nhận 1 Chiên Đàn Hương Khí.", "Khi bị công kích, có xác suất giảm 35% sát thương lần này, đồng thời nhận 1 Chiên Đàn Hương Khí.", "Khi bị công kích, có xác suất giảm 40% sát thương lần này, đồng thời nhận 1 Chiên Đàn Hương Khí", "Khi bị công kích, có xác suất giảm 45% sát thương lần này, đồng thời nhận 1 Chiên Đàn Hương Khí.", "Khi bị công kích, có xác suất giảm 50% sát thương lần này, đồng thời nhận 1 Chiên Đàn Hương Khí."]',
                "effect_ext" => '["", ["Hóa Du: Khi Chiên Đàn Hương Khí bao quanh, bị công kích có xác suất nhất định đả thông một số tử huyết (Số khí huyết màu đen) thành tụ huyết.", "Hoạt Huyết: Nhận 5 Chiên Đàn Hương Khí xong, sẽ hồi phục 30% tụ huyết thành khí huyết bình thường."], ["Hóa Du: Khi Chiên Đàn Hương Khí bao quanh, bị công kích có xác suất nhất định đả thông một số tử huyết (Số khí huyết màu đen) thành tụ huyết.", "Hoạt Huyết: Nhận 5 Chiên Đàn Hương Khí xong, sẽ hồi phục 34% tụ huyết thành khí huyết bình thường."], ["Hóa Du: Khi Chiên Đàn Hương Khí bao quanh, bị công kích có xác suất nhất định đả thông một số tử huyết (Số khí huyết màu đen) thành tụ huyết.", "Hoạt Huyết: Nhận 5 Chiên Đàn Hương Khí xong, sẽ hồi phục 38% tụ huyết thành khí huyết bình thường."], ["Hóa Du: Khi Chiên Đàn Hương Khí bao quanh, bị công kích có xác suất nhất định đả thông một số tử huyết (Số khí huyết màu đen) thành tụ huyết.", "Hoạt Huyết: Nhận 5 Chiên Đàn Hương Khí xong, sẽ hồi phục 42% tụ huyết thành khí huyết bình thường."], ["Hóa Du: Khi Chiên Đàn Hương Khí vương vấn quanh mình, bị công kích có xác suất đả thông một số tử huyết (một số huyết khí màu đen), hóa thành Tụ Huyết.", "Hoạt Huyết: Nhận 4 Chiên Đàn Hương Khí xong, sẽ lấy 50% Tụ Huyết hồi phục thành khí huyết bình thường."]]',
            ],
            [
                "id" => 5,
                "name" => "Tẩy Tủy Kinh",
                "slug" => "tay-tuy-kinh",
                "max_level" => 49,
                "rank" => 5,
                "max_rage" => 130,
                "school_id" => 1,
                "type" => "0", //duong cuong
                "desc" => 'Thiếu Lâm khoáng thế kỳ công, tương truyền Đạt Ma sư tổ tu luyện uyên thâm, công thành tọa hóa lưu lại. Công pháp uyên thâm, tinh thông nguyên khí  vạn vật thiên địa, thể khí giao thoa, "Lưu hành thông suốt, vạn vật là mệnh, xuyên kim phá thạch, thủy hỏa xông pha, lý khí song hành". Cảnh giới cao thâm, hiếm người luyện thành. Bạo phát cực mạnh--Vạn vật khó bì, trường sinh vĩnh viễn--Phóng khoáng siêu phàm.',
                "effect_ext" => '["", ["Vô Sứ Chung Khí: Khi tấn công có tỷ lệ tăng 2% tỷ lệ bạo kích và 4% sát thương bạo kích, duy trì 40 giây, nhiều nhất có thể chồng 4 tầng.", "Tẩy Tủy Hoàn Nguyên: Khi bị tấn công có tỷ lệ hồi phục khí huyết bản thân, đồng thời giải trừ 1 trạng thái xấu."], ["Vô Sứ Chung Khí: Khi tấn công có tỷ lệ tăng 2% tỷ lệ bạo kích và 4% sát thương bạo kích, duy trì 40 giây, nhiều nhất có thể chồng 4 tầng.", "Tẩy Tủy Hoàn Nguyên: Khi bị tấn công có tỷ lệ hồi phục khí huyết bản thân, đồng thời giải trừ 1 trạng thái xấu."], ["Vô Sứ Chung Khí: Khi tấn công có tỷ lệ tăng 2% tỷ lệ bạo kích và 4% sát thương bạo kích, duy trì 40 giây, nhiều nhất có thể chồng 5 tầng.", "Tẩy Tủy Hoàn Nguyên: Khi bị tấn công có tỷ lệ hồi phục khí huyết bản thân, đồng thời giải trừ 1 trạng thái xấu."], ["Vô Sứ Chung Khí: Khi tấn công có tỷ lệ tăng 2% tỷ lệ bạo kích và 4% sát thương bạo kích, duy trì 40 giây, nhiều nhất có thể chồng 5 tầng.", "Tẩy Tủy Hoàn Nguyên: Khi bị tấn công có tỷ lệ hồi phục khí huyết bản thân, đồng thời giải trừ 1 trạng thái xấu."], ["Vô Sứ Chung Khí: Khi tấn công có tỷ lệ tăng 2% tỷ lệ bạo kích và 4% sát thương bạo kích, duy trì 40 giây, nhiều nhất có thể chồng 6 tầng.", "Tẩy Tủy Hoàn Nguyên: Khi bị tấn công có tỷ lệ hồi phục khí huyết bản thân, đồng thời giải trừ đa số trạng thái xấu, và trong thời gian ngắn miễn dịch những hiệu quả này."]]',
            ],
            [
                "id" => 6,
                "name" => "Khổ Hạnh Thiền Công",
                "slug" => "kho-hanh-thien-cong",
                "max_level" => 49,
                "rank" => 6,
                "max_rage" => 130,
                "school_id" => 1,
                "type" => "0", //duong cuong
                "desc" => 'Nội công độc môn Thiếu Lâm, người luyện công này, cam chịu cực khổ, rèn luyện cân cốt, nên có tên là "Khổ Hạnh Thiền Công", luyện đến đại thành, tâm kiên chí khố, tà ác bất xâm, ẩn chứa sức mạnh "Kim cương bất hoại".',
                "effect_ext" => '["", ["Khổ Độ Chúng Sinh: Lúc công kích có tỷ lệ nhất định khiến bản thân trong 8s tăng 8% sát thương tất cả chiêu thức và bỏ qua miễn giảm phòng ngự tăng 8% sát thương tất cả chiêu thức.", "Khô Thiện Độc Ẩm: Lúc đỡ đòn thành công có tỷ lệ nhất định khiến bản thân trong 8s hồi phục Khí Huyết và điểm đỡ đòn."], ["Khổ Độ Chúng Sinh: Lúc công kích có tỷ lệ nhất định khiến bản thân trong 9s tăng 9% sát thương tất cả chiêu thức và bỏ qua miễn giảm phòng ngự  tăng 9%.", "Khô Thiện Độc Ẩm: Lúc đỡ đòn thành công có tỷ lệ nhất định khiến bản thân trong 9s liên tục hồi phục Khí Huyết và điểm đỡ đòn."], ["Khổ Độ Chúng Sinh: Lúc công kích có tỷ lệ nhất định khiến bản thân trong 10s sát thương tất cả chiêu thức tăng 10% và bỏ qua miễn giảm phòng ngự tăng 10%.", "Khô Thiện Độc Ẩm: Lúc đỡ đòn thành công có tỷ lệ nhất định khiến bản thân trong 10s hồi phục Khí Huyết và điểm đỡ đòn."], ["Khổ Độ Chúng Sinh: Lúc công kích có tỷ lệ nhất định khiến bản thân trong 10s sát thương tất cả chiêu thức tăng 12% và bỏ qua miễn giảm phòng ngự tăng 12%.", "Khô Thiện Độc Ẩm: Lúc đỡ đòn thành công có tỷ lệ nhất định khiến bản thân trong 12s hồi phục Khí Huyết và điểm đỡ đòn."], ["Khổ Độ Chúng Sinh: Lúc công kích có tỷ lệ nhất định khiến bản thân trong 10s tăng 15% sát thương tất cả chiêu thức và bỏ qua miễn giảm phòng ngự tăng 15%.", "Khô Thiện Độc Ẩm: Lúc đỡ đòn thành công có tỷ lệ nhất định khiến bản thân trong 15s hồi phục khí huyết và điểm đỡ đòn.", "Hành Giả Vô Cương: Lúc bị công kích có tỷ lệ nhất định xóa bỏ phần lớn trạng thái phá phòng, hôn mê và phong chiêu của bản thân."]]',
            ],
            [
                "id" => 7,
                "name" => "Thiếu Lâm Hội Ý Công",
                "slug" => "thieu-lam-hoi-y-cong",
                "max_level" => 5,
                "rank" => 7,
                "max_rage" => 130,
                "school_id" => 1,
                "type" => "0", //duong cuong
                "desc" => 'Nội công nghiên tu, càng lên cao  càng đòi hỏi "ôn tập" và "ý hội". Ta học hỏi từ cái cũ mọi lúc, và bất cứ khi nào có điều gì mới, những gì ta đã học được nằm ở bên ta, và nó phải là vô tận.',
                "effect" => '["", "Công hàm phật pháp, cảnh thị chúng sinh. Mỗi lần công kích đều có xác suất khiến bản thân tiến vào cảnh giới \"Chư Tương Phi Tương\", giác ngộ Nhất Tương trong Tứ Tương. Có xác suất giác ngộ Tứ Tương trong đó(Chỉ có người nghĩa hiệp mới có thể lãnh hội tầng cảnh giới này). ", "Công hàm phật pháp, cảnh thị chúng sinh. Mỗi lần công kích đều có xác suất khiến bản thân tiến vào cảnh giới \"Chư Tương Phi Tương\", giác ngộ Nhất Tương trong Tứ Tương. Có xác suất giác ngộ Tứ Tương trong đó(Chỉ có người nghĩa hiệp mới có thể lãnh hội tầng cảnh giới này). ", "Khi bị công kích, có xác suất giảm 50% sát thương lần này, đồng thời nhận 1 Chiên Đàn Hương Khí.", "", ""]',
                "effect_ext" => '["", "", "", ["Hóa Du: Khi Chiên Đàn Hương Khí vương vấn quanh mình, bị công kích có xác suất đả thông một số tử huyết (một số huyết khí màu đen), hóa thành Tụ Huyết.", "Hoạt Huyết: Nhận 4 Chiên Đàn Hương Khí xong, sẽ lấy 50% Tụ Huyết hồi phục thành khí huyết bình thường."], ["Vô Sứ Chung Khí: Khi tấn công có tỷ lệ tăng 2% tỷ lệ bạo kích và 4% sát thương bạo kích, duy trì 40 giây, nhiều nhất có thể chồng 6 tầng.", "Tẩy Tủy Hoàn Nguyên: Khi bị tấn công có tỷ lệ hồi phục khí huyết bản thân, đồng thời giải trừ đa số trạng thái xấu, và trong thời gian ngắn miễn dịch những hiệu quả này."], ["Khổ Độ Chúng Sinh: Lúc công kích có tỷ lệ nhất định khiến bản thân trong 15s tăng 15% sát thương tất cả chiêu thức và bỏ qua miễn giảm phòng ngự tăng 15%.", "Khô Thiện Độc Ẩm: Lúc đỡ đòn thành công có tỷ lệ nhất định khiến bản thân trong 15s hồi phục khí huyết và điểm đỡ đòn.", "Hành Giả Vô Cương: Lúc bị công kích có tỷ lệ nhất định xóa bỏ phần lớn trạng thái phá phòng, hôn mê và phong chiêu của bản thân."]]',
            ],

            // vo dang
            [
                "id" => 8,
                "name" => "Lưỡng Nghi Hộ Tâm Công",
                "slug" => "luong-nghi-ho-tam-cong",
                "max_level" => 36,
                "rank" => 1,
                "max_rage" => 90,
                "school_id" => 2,
                "type" => "2", //thaicuc
                "desc" => 'Võ Đang cơ sở nội công tâm pháp, lấy từ [kinh Dịch],  "dịch hữu thái cực, thủy sinh lưỡng nghi", công pháp này tụ hợp âm dương trong cơ thể, luyện cương nhu trong bếp lò, hai như một, là lúc công pháp đại thành, thân như kim cang bất hoại, thế lực vô địch, đều là công lưỡng nghi.',
                "effect" => '["", "Bị công kích có xác suất 10% kích thích nội chân khí bản thân, hấp thu 100 điểm sát thương, chân khí bị kích tán hoặc tự động tản đi, có một bộ phận hồi phục Nội Lực bản thân", "Bị công kích có xác suất 10% kích thích nội chân khí bản thân, hấp thu 150 điểm sát thương, chân khí bị kích tán hoặc tự động tản đi, có một bộ phận hồi phục Nội Lực bản thân", "Bị công kích có xác suất 10% kích thích nội thế chân khí, hấp thu 210 điểm sát thương, chân khí bị kích tán hoặc tự động tản đi, có một bộ phận hồi phục Nội Lực bản thân", "Bị công kích có xác suất 10% kích thích nội thế chân khí, lúc hấp thu 210 điểm bị tổn thương, chân khí bị kích tán hoặc tự động tản đi, có một bộ phận hồi phục Nội Lực bản thân, một phần khác công kích mục tiêu xung quanh khiến hai chân tê liệt, không thể di chuyển"]',
            ],
            [
                "id" => 9,
                "name" => "Nội Đan Thuật",
                "slug" => "noi-dan-thuat",
                "max_level" => 36,
                "rank" => 2,
                "max_rage" => 100,
                "school_id" => 2,
                "type" => "1", //am nhu
                "desc" => 'Võ Đang nội công tuyệt học, nội công tu luyện "tinh, khí, thần" trong cơ thể kết đan, chú trọng luyện tinh hoá khí, luyện khí hoá thần, lúc thành công năng chí, thiên nhân hợp nhất, cảnh giới thiên nhân tương ứng, công pháp kỳ diệu không thể tả.',
                "effect" => '["", "Khi Nội Lực không đủ 40%, công kích có xác suất 12% hồi phục 2% Nội Lực. Khi Nội Lực cao hơn 40%, kèm sát thương 2% điểm Nội Lực hiện tại", "Khi Nội Lực không đủ 40%, công kích có xác suất 16% hồi phục 2& Nội Lực. Khi Nội Lực cao hơn 40%, kèm sát thương 3% điểm Nội Lực hiện tại", "Khi Nội Lực không đủ 40%, công kích có xác suất 20% hồi phục 2% Nội Lực. Khi Nội Lực cao hơn 40%, kèm sát thương 4% điểm Nội Lực hiện tại", "Công kích có xác suất 20% hồi phục 2% Nội Lực mỗi lần công kích đều kèm sát thương 4% điểm Nội Lực hiện tại"]',
            ],
            [
                "id" => 10,
                "name" => "Thượng Thanh Vô Cực Công",
                "slug" => "thuong-thanh-vo-cuc-cong",
                "max_level" => 36,
                "rank" => 3,
                "max_rage" => 110,
                "school_id" => 2,
                "type" => "2", //thai cuc
                "desc" => 'Võ Đang nội công tuyệt học, nội công tâm pháp thu lại, bí quyết có chín chuyển, nhất chuyển hàng đan, nhị chuyển giao cấu, tam chuyển dưỡng dương, tứ chuyển dưỡng âm, ngũ chuyển hoán cốt, lục chuyển hoán nhục, thất chuyển hoán ngũ tạng lục phủ, bát chuyển dục hỏa, cửu chuyển phi thăng.',
                "effect_ext" => '["", ["Kim Đan Độ Kiếp: Khi Khí huyết dưới 30% bị công kích, trong 6 giây phục hồi nhanh 30% Khí huyết tối đa, hồi 200 giây.", "Thượng Thanh Vô Cực Công: Phù Dao Bộ Pháp nhảy tốc độ + 3"], ["Kim Đan Độ Kiếp: Khi Khí huyết dưới 30% bị công kích, trong 6 giây phục hồi nhanh 30% Khí huyết tối đa, hồi 150 giây.", "Thượng Thanh Vô Cực Công: Phù Dao Bộ Pháp nhảy với tốc độ + 3"], ["Kim Đan Độ Kiếp: Khi Khí huyết dưới 30% bị công kích, trong 6 giây phục hồi nhanh 30% Khí huyết tối đa, hồi 120 giây.", "Thượng Thanh Vô Cực Công: Phù Dao Bộ Pháp nhảy với tốc độ + 3"], ["Kim Đan Độ Kiếp: Khi Khí huyết dưới 30% bị công kích, trong 6 giây phục hồi nhanh 30% Khí huyết tối đa, hồi 100 giây.", "Thượng Thanh Vô Cực Công: Phù Dao Bộ Pháp nhảy với tốc độ + 3"]]',
            ],
            [
                "id" => 11,
                "name" => "Thuần Dương Vô Cực Công",
                "slug" => "thuan-duong-vo-cuc-cong",
                "max_level" => 49,
                "rank" => 4,
                "max_rage" => 120,
                "school_id" => 2,
                "type" => "2", //thai cuc
                "desc" => 'Tinh hoa công pháp Đạo gia, do Trương Tam Phong sáng lập, nội dung quan trọng của tâm pháp chính là "hít thở sâu, hình và khí hợp nhất, chủ yếu dựa vào đan điền." Khí thuần dương dâng trào và phóng ra, làm chấn thương địch, tổn hại gân mạch.',
                "effect_ext" => '["", ["Khi công kích, có xác suất nhất định làm \"Chấn Thương\" mục tiêu: Mỗi lần bị công kích đều sẽ nhận thêm sát thương dương, duy trì 11s.", "Thuần Dương Vô Cực: Trong thời gian mục tiêu \"Chấn Thương\", sau 3 lần xuất chiêu, xuất chiêu tiếp sẽ khiến \"Nội thương thêm nặng\": Phong chiêu và cấm khinh công 2s. Nếu chưa kích hoạt \"Nội thương thêm nặng\", thì khi kết thúc \"Chấn Thương\" sẽ thêm một lần hiệu quả \"Nội thương thêm nặng\"."], ["Khi công kích, có xác suất nhất định làm \"Chấn Thương\" mục tiêu: Mỗi lần bị công kích đều sẽ nhận thêm sát thương dương, duy trì 12s.", "Thuần Dương Vô Cực: Trong thời gian mục tiêu \"Chấn Thương\", sau 3 lần xuất chiêu, xuất chiêu tiếp sẽ khiến \"Nội thương thêm nặng\": Phong chiêu và cấm khinh công 2s. Nếu chưa kích hoạt \"Nội thương thêm nặng\", thì khi kết thúc \"Chấn Thương\" sẽ thêm một lần hiệu quả \"Nội thương thêm nặng\"."], ["Khi công kích, có xác suất nhất định làm \"Chấn Thương\" mục tiêu: Mỗi lần bị công kích đều sẽ nhận thêm sát thương dương, duy trì 13s.", "Thuần Dương Vô Cực: Trong thời gian mục tiêu \"Chấn Thương\", sau 3 lần xuất chiêu, xuất chiêu tiếp sẽ khiến \"Nội thương thêm nặng\": Phong chiêu và cấm khinh công 2s. Nếu chưa kích hoạt \"Nội thương thêm nặng\", thì khi kết thúc \"Chấn Thương\" sẽ thêm một lần hiệu quả \"Nội thương thêm nặng\"."], ["Khi công kích, có xác suất nhất định làm \"Chấn Thương\" mục tiêu: Mỗi lần bị công kích đều sẽ nhận thêm sát thương dương, duy trì 14s.", "Thuần Dương Vô Cực: Trong thời gian mục tiêu \"Chấn Thương\", sau 3 lần xuất chiêu, xuất chiêu tiếp sẽ khiến \"Nội thương thêm nặng\": Phong chiêu và cấm khinh công 2s. Nếu chưa kích hoạt \"Nội thương thêm nặng\", thì khi kết thúc \"Chấn Thương\" sẽ thêm một lần hiệu quả \"Nội thương thêm nặng\"."], ["Khi công kích, có xác suất làm mục tiêu \"Chấn Thương\": Mỗi lần bị công kích đều nhận thêm sát thương dương, duy trì 16s.", "Thuần Dương Vô Cực: Khi mục tiêu \"Chấn Thương\", sau 3 lần xuất chiêu, cưỡng chế xuất chiêu tiếp \"nội thương thêm nặng\": phong chiêu và cấm khinh công 3s. Nếu chưa kích hoạt \"nội thương thêm nặng\", thì khi kết thúc \"Chấn Thương\" sẽ thêm một lần hiệu quả \"nội thương thêm nặng\"."]]',
            ],
            [
                "id" => 12,
                "name" => "Ỷ Thiên Đồ Long Công",
                "slug" => "y-thien-do-long-cong",
                "max_level" => 49,
                "rank" => 5,
                "max_rage" => 130,
                "school_id" => 2,
                "type" => "2", //thai cuc
                "desc" => 'Võ Đang cái thế thần công, sư tổ Trương Tam Phong buồn vì mất đồ đệ yêu quý nên đã viết "Võ lâm chí tôn, bảo đao Đồ Long, hiệu lệnh thiên hạ, mạc cảm bất tòng, Ỷ Thiên bất xuất, thùy dữ tranh phong" và trở thành bộ tâm pháp nội công cao thâm này. Tâm pháp thuần theo đạo Âm Dương Thiên Địa, công thủ vẹn toàn "Thả phu thiên địa vi lô hề, tạo hóa vi công; âm dương vi thán hề, vạn vật vi đồng", Công---Cử hỏa liệu thiên lực phá kim thang, Thủ---Truyền nhu khắc cương minh hải mang mang.',
                "effect_ext" => '["", ["Bảo Đao Đồ Long, Hiệu Lệnh Thiên Hạ: Khi tấn công có tỷ lệ tăng 30% sát thương tất cả các chiêu thức, tăng thêm 25% xem nhẹ đỡ đòn, duy trì 10s.", "Ỷ Thiên Bất Xuất, Thùy Dữ Tranh Phong: Khi bị tấn công có tỷ lệ khiến trong thời gian ngắn tăng 30% miễn thương của bản thân, và duy trì hồi phục khí huyết, duy trì 10s.　Trong 1 khoảng thời gian chỉ có thể kích hoạt 1 trong 2 hiệu ứng."], ["Bảo Đao Đồ Long, Hiệu Lệnh Thiên Hạ: Khi tấn công có tỷ lệ tăng 30% sát thương tất cả các chiêu thức, tăng thêm 25% xem nhẹ đỡ đòn, duy trì 11s.", "Ỷ Thiên Bất Xuất, Thùy Dữ Tranh Phong: Khi bị tấn công có tỷ lệ khiến trong thời gian ngắn tăng 30% miễn thương của bản thân, và duy trì hồi phục khí huyết, duy trì 11s.　Trong 1 khoảng thời gian chỉ có thể kích hoạt 1 trong 2 hiệu ứng."], ["Bảo Đao Đồ Long, Hiệu Lệnh Thiên Hạ: Khi tấn công có tỷ lệ tăng 30% sát thương tất cả các chiêu thức, tăng thêm 25% xem nhẹ đỡ đòn, duy trì 12s.", "Ỷ Thiên Bất Xuất, Thùy Dữ Tranh Phong: Khi bị tấn công có tỷ lệ khiến trong thời gian ngắn tăng 30% miễn thương của bản thân, và duy trì hồi phục khí huyết, duy trì 12s.　Trong 1 khoảng thời gian chỉ có thể kích hoạt 1 trong 2 hiệu ứng."], ["Bảo Đao Đồ Long, Hiệu Lệnh Thiên Hạ: Khi tấn công có tỷ lệ tăng 30% sát thương tất cả các chiêu thức, tăng thêm 25% xem nhẹ đỡ đòn, duy trì 13s.", "Ỷ Thiên Bất Xuất, Thùy Dữ Tranh Phong: Khi bị tấn công có tỷ lệ khiến trong thời gian ngắn tăng 30% miễn thương của bản thân, và duy trì hồi phục khí huyết, duy trì 13s.　Trong 1 khoảng thời gian chỉ có thể kích hoạt 1 trong 2 hiệu ứng."], ["Bảo Đao Đồ Long, Hiệu Lệnh Thiên Hạ: Khi tấn công có tỷ lệ tăng 30% sát thương tất cả các chiêu thức, tăng thêm 25% xem nhẹ đỡ đòn, duy trì 15s.", "Ỷ Thiên Bất Xuất, Thùy Dữ Tranh Phong: Khi bị tấn công có tỷ lệ khiến trong thời gian ngắn tăng 30% miễn thương của bản thân, và duy trì hồi phục khí huyết, duy trì 15s.", "Võ Lâm Chí Tôn: Trong 1 khoảng thời gian, có thể đồng thời kích hoạt cả 2 hiệu ứng “Ỷ Thiên” “Đồ Long”."]]',
            ],
            [
                "id" => 13,
                "name" => "Thái Cực Thần Công",
                "slug" => "thai-cuc-than-cong",
                "max_level" => 49,
                "rank" => 6,
                "max_rage" => 130,
                "school_id" => 2,
                "type" => "2", //thai cuc
                "desc" => 'Điểm cực cao trong tâm pháp nội công Đạo Gia, là: "Dị hữu thái cực, thủy sinh lưỡng nghi, lưỡng nghi sinh tứ tượng, tứ tượng sinh bát quái, bát quái suy diễn vạn vật." Nội công này coi trọng vận dụng thành thạo khái niệm chuyển hóa tương sinh "Thái Cực Âm Dương Nhị Khí", mượn lực đánh lực, là nội công cao nhất về "Vô vi" của Đạo Gia. Nội công này luyện thành, công tham tạo hóa, lực ngự vạn vật, luôn bất bại!',
                "effect_ext" => '["", ["Hóa Khí: Lúc bị công kích có tỷ lệ nhất định Hóa Kình hấp thu 15% sát thương, và hồi khí huyết bản thân nhất định.", "Dẫn Kình: Lúc bị công kích có tỷ lệ nhất định giảm 15% sát thương và gây ra sát thương nhu nhất định."], ["Hóa Khí: Lúc bị công kích có tỷ lệ nhất định Hóa Kình hấp thu 18% sát thương, và hồi phục Khí Huyết bản thân nhất định.", "Dẫn Kình: Lúc bị công kích có tỷ lệ nhất định giảm 18% sát thương, và gây ra sát thương nhu nhất định cho đối phương."], ["Hóa Khí: Lúc bị công kích có tỷ lệ nhất định hóa kình hấp thu 21% sát thương, và hồi khí huyết bản thân nhất định.", "Dẫn Kình: Lúc bị công kích có tỷ lệ nhất định giảm 21% sát thương, và gây ra sát thương nhu nhất định với đối phương."], ["Hóa Khí: Lúc bị công kích có tỷ lệ nhất định hóa kình hấp thu 25% sát thương, và hồi khí huyết bản thân nhất định.", "Dẫn Kình: Lúc bị công kích có tỷ lệ nhất định giảm 25% sát thương, và gây ra sát thương nhu nhất định với đối phương."], ["Hóa Khí: Lúc bị công kích có tỷ lệ nhất định hóa kình hấp thu 30% sát thương, và hồi khí huyết bản thân nhất định.", "Dẫn Kình: Lúc bị công kích có tỷ lệ nhất định giảm 30% sát thương, và gây ra sát thương nhu nhất định với đối phương.", "Thái Cực Vi Đạo: \"Hóa Khí\" và \"Dẫn Kình\" lúc kích hoạt có tỷ lệ nhất định khiến sát thương tất cả chiêu thức bản thân tăng 10%, nhiều nhất có thể chồng 5 tầng, sau khi tấn công xóa bỏ, duy trì 10s."]]',
            ],
            [
                "id" => 14,
                "name" => "Võ Đang Hội Ý Công",
                "slug" => "vo-dang-hoi-y-cong",
                "max_level" => 5,
                "rank" => 7,
                "max_rage" => 130,
                "school_id" => 2,
                "type" => "2", //thai cuc
                "desc" => 'Nội công nghiên tu, càng lên cao  càng đòi hỏi "ôn tập" và "ý hội". Ta học hỏi từ cái cũ mọi lúc, và bất cứ khi nào có điều gì mới, những gì ta đã học được nằm ở bên ta, và nó phải là vô tận.',
                "effect_ext" => '["", ["金丹渡劫: 气血低于30%时受到攻击，在5秒内快速恢复30%的最大气血值，100秒冷却", "上清无极: 扶摇步法起跳速度+3"], ["金丹渡劫: 气血低于30%时受到攻击，在5秒内快速恢复30%的最大气血值，100秒冷却", "上清无极: 扶摇步法起跳速度+3"], ["攻击时，有一定几率将目标“震伤”： 每次被攻击都会受到额外阳伤害，持续16秒。", "纯阳无极: 目标“震伤”期间，出招3次后，再次强行出招则“内伤加重”-封招并禁轻功3秒。", "如未触发“内伤加重”，则“震伤”结束时追加一次“内伤加重”效果。"], ["号令天下: 攻击时有几率提高自身30%所有招式伤害，忽视招架额外提高25%，持续15秒。", "谁与争锋: 被攻击时有几率使自身在一段时间内提高30%免伤，并持续恢复气血，持续15秒。", "武林至尊: 一段时间内，可同时触发“谁与争锋”“号令天下”效果。"], ["化气: 被攻击时有一定几率化劲吸收30%的伤害，并回复自身一定气血。", "引劲: 被攻击时有一定几率牵引卸去30%的伤害，并给对方造成一定柔伤害。", "极为道: “化气”和“引劲”触发时使自身所有招式伤害提高10%，最多可叠加5层，攻击后移除，持续10秒。"]]',
            ],
            [
                "id" => 15,
                "name" => "Khí Trang Công",
                "slug" => "khi-trang-cong",
                "max_level" => 36,
                "rank" => 1,
                "max_rage" => 90,
                "school_id" => 3,
                "type" => "1", 
                "desc" => 'Nội Công Tâm Pháp cơ bản của Nga Mi, là Nga Mi Sơn Bạch Vân Thiền Sư sáng tạo, lấy hư thực của âm dương và quy luật của Nhân Thể thịnh suy, khi học võ Nhu Tạp động tĩnh Công Pháp, tương hộ dung hợp, thành Đại Đạo Công Pháp.',
                "effect" => '["", "Lúc đỡ đòn miễn vượt mức 15 điểm sát thương nội công và 12 điểm sát thương ngọai công", "Lúc đỡ đòn miễn vượt mức 30 điểm sát thương nội công và 16 điểm sát thương ngọai công", "Lúc đỡ đòn miễn vượt mức 45 điểm sát thương nội công và 22 điểm sát thương ngọai công", "Lúc đỡ đòn miễn vượt mức 90% sát thương nội công  và 70% điểm sát thương ngọai công"]',
            ],
            [
                "id" => 16,
                "name" => "Ngũ Phù Kinh",
                "slug" => "ngu-phu-kinh",
                "max_level" => 36,
                "rank" => 2,
                "max_rage" => 100,
                "school_id" => 3,
                "type" => "1",
                "desc" => 'Nga Mi quan trọng Nội Công Tâm Pháp, là một trong những Nga Mi Phái Tuyệt Học. Lấy Ngũ Phù làm Kinh, Thượng làm Ngũ Tinh, Hạ làm Ngũ Nhạc, Nội làm Ngũ Ngọc, Ngoại làm Ngũ Vân, Hóa làm Ngũ Long. Linh Hóa, Hạ và Đào Quán Tam Khí.',
                "effect" => '["", "Kích thích chân khí nội thể, mỗi 20s hấp thu 120 điểm sát thương", "Kích thích chân khí nội thể, mỗi 20s hấp thu 180 điểm sát thương", "Kích thích chân khí nội thể, mỗi 20s hấp thu 260 điểm sát thương", "Kích thích chân khí nội thể, mỗi 20s hấp thu 300 điểm sát thương, khi có hộ thể chân khí phản đòn sát thương"]',
            ],
            [
                "id" => 17,
                "name" => "Phi Huyền Vũ Kinh",
                "slug" => "phi-huyen-vu-kinh",
                "max_level" => 36,
                "rank" => 3,
                "max_rage" => 110,
                "school_id" => 3,
                "type" => "1",
                "desc" => 'Tập Đại Thành của Nga Mi Nội Công Tâm Pháp. Vốn là Đạo Giáo Kinh, sau chuyển đến Nga Mi, nhiều lần chỉnh sửa, thành Võ Học Mật Pháp nay. Trên dựa Cửu Thiên Nạp Khí Hải, Hạ lấy Ngũ Hành định Đan Điền, Ngoại Quyển càn Khôn, Nội Tu Âm Dương, Phương Năng Đại Thừa.',
                "effect_ext" => '["", ["Thư Hoạt Kinh Mạch: Mỗi lần xuất chiêu công kích trong 5 giây hồi phục 1% HP tối đa", "Lăng Không Hoán Khí: Xuyên Vân Tung có thể Lăng Không Hoán Khí, sau 3 giây có thể tiếp tục Xuyên Vân Tung"], ["Thư Hoạt Kinh Mạch: Mỗi lần xuất chiêu công kích trong 5 giây hồi phục 1.5% HP tối đa", "Lăng Không Hoán Khí: Xuyên Vân Tung có thể Lăng Không Hoán Khí, sau 3 giây có thể tiếp tục Xuyên Vân Tung"], ["Thư Hoạt Kinh Mạch: Mỗi lần xuất chiêu công kích trong 5 giây hồi phục 2% HP tối đa", "Lăng Không Hoán Khí: Xuyên Vân Tung có thể Lăng Không Hoán Khí, sau 3 giây có thể tiếp tục Xuyên Vân Tung"], ["Thư Hoạt Kinh Mạch: Mỗi lần xuất chiêu công kích trong 5 giây hồi phục 2% khí huyết tối đa, có xác suất hồi phục khí huyết 2 lần", "Lăng Không Hoán Khí: Xuyên Vân Tung có thể Lăng Không Hoán Khí, sau 3 giây có thể tiếp tục Xuyên Vân Tung"]]',
            ],
            [
                "id" => 18,
                "name" => "Băng Cơ Ngọc Cốt Công",
                "slug" => "bang-co-ngoc-cot-cong",
                "max_level" => 49,
                "rank" => 4,
                "max_rage" => 120,
                "school_id" => 3,
                "type" => "1",
                "desc" => 'Là võ lâm Tiền Bối Nhiếp Ảnh sáng tạo ra, sau là Quách Tương ái nữ Quách Tĩnh đã học, Tâm Pháp cần chỉ ở "Tâm Nhược Băng Thanh, Thiên Tháp Bất Kinh; Vạn Biến Do Định, Thần Di Khí Tĩnh; Trần Cấu Bất Triêm, Tục Tương Bất Nhiễm; Hư Không Ninh Mật, Hồn Nhiên Vô Vật; Nhất Tâm Bất Chuế Vật, Cổ Kim Tự ung dung!"',
                "effect" =>  '["", "Kẻ địch âm mưu tấn công mình, có tỉ lệ nhất định bị tập kích tê buốt tận xương, ngưng chiêu thức mục tiêu đang dùng và tạm thời đơ trong chớp mắt.", "Kẻ địch âm mưu tấn công mình, có tỉ lệ nhất định bị tập kích tê buốt tận xương, ngưng chiêu thức mục tiêu đang dùng và tạm thời đơ trong chớp mắt.", "Kẻ địch âm mưu tấn công mình, có tỉ lệ nhất định bị tập kích tê buốt tận xương, ngưng chiêu thức mục tiêu đang dùng và tạm thời đơ trong chớp mắt.", "Kẻ địch âm mưu tấn công mình, có tỉ lệ nhất định bị tập kích tê buốt tận xương, ngưng chiêu thức mục tiêu đang dùng và tạm thời đơ trong chớp mắt.",  "Đối thủ khi tấn công sẽ có xác suất bị \"Hàn Ý Xâm Tập\", phá vỡ chiêu thức, đơ trong thời gian ngắn."]',
                "effect_ext" => '["", ["Khi bị tấn công, có tỷ lệ xuất chiêu Ngọc Khiết Băng Thanh: Khi xuất chiêu loại bỏ phần lớn trạng thái tiêu cực, khôi phục ít sức đỡ đòn và tăng 9 hóa giải nội công+đỡ nội ngoại công trong 10 giây, tấn công thêm sát thương âm."], ["Khi bị tấn công, có tỷ lệ xuất chiêu Ngọc Khiết Băng Thanh: Khi xuất chiêu loại bỏ phần lớn trạng thái tiêu cực, khôi phục ít sức đỡ đòn và tăng 12 hóa giải nội công+đỡ nội ngoại công trong 11 giây, tấn công thêm sát thương âm."], ["Khi bị tấn công, có tỷ lệ xuất chiêu Ngọc Khiết Băng Thanh: Khi xuất chiêu loại bỏ phần lớn trạng thái tiêu cực, khôi phục ít sức đỡ đòn và tăng 15 hóa giải nội công+đỡ nội ngoại công trong 12 giây, tấn công thêm sát thương âm."], ["Khi bị tấn công, có tỷ lệ xuất chiêu Ngọc Khiết Băng Thanh: Khi xuất chiêu loại bỏ phần lớn trạng thái tiêu cực, khôi phục ít sức đỡ đòn và tăng 18 hóa giải nội công+đỡ ngoại công trong 13 giây, tấn công thêm sát thương âm."], ["Khi bị tấn công có xác suất thi triển Ngọc Khiết Băng Thanh: khi thi triển sẽ rũ bỏ hầu hết trạng thái xấu, hồi phục 1 ít sức đỡ đòn và trong 15s đỡ đòn ngoại công và hóa giải nội công tăng 18, công kích kèm sát thương âm."]]'
            ],
            [
                "id" => 19,
                "name" => "Đại Thừa Niết Bàn Công",
                "slug" => "dai-thua-niet-ban-cong",
                "max_level" => 49,
                "rank" => 5,
                "max_rage" => 130,
                "school_id" => 3,
                "type" => "1",
                "desc" => 'Nga Mi diệt độ thánh công, truyền rằng sư tổ Nga Mi Quách Tương nghiên cứu Niết Bàn Kinh và Pháp Hoa Kinh, theo giấc mơ mà tạo thành, "Thụ chư nhân duyên cố, luân chuyển sinh tử trung, bất thụ chư nhân duyên, thị danh vi Niết Bàn. Niết Bàn dữ thế gian, vô hữu thiểu phân biệt, thế gian dữ Niết Bàn, diệc vô thiểu phân biệt.", nội công tâm pháp lấy "Bất sinh bất diệt, bất cấu bất tịnh, bất tăng bất giảm," làm cảnh giới chí cao, hóa cảnh Niết Bàn một ngày, "Không, Ly, Tịch, Diệt", tắc hạo nhiên đại quân, chúng sinh úy vô ngã, vô địch vu thiên hạ.',
                "effect_ext" => '["", ["Niết Bàn Hóa Cảnh: Tấn công hoặc bị tấn công đều có thể nhận được hộ thể thuẫn, hấp thu sát thương và duy trì tạo sát thương Dương ra xung quanh, và giảm nội phòng của mục tiêu, duy trì 6 giây. Khi hộ thể thuẫn bị phá, sẽ mất hiệu quả của Niết Bàn Hóa Cảnh."], ["Niết Bàn Hóa Cảnh: Tấn công hoặc bị tấn công đều có thể nhận được hộ thể thuẫn, hấp thu sát thương và duy trì tạo sát thương Dương ra xung quanh, và giảm nội phòng của mục tiêu, duy trì 7 giây. Khi hộ thể thuẫn bị phá, sẽ mất hiệu quả của Niết Bàn Hóa Cảnh."], ["Niết Bàn Hóa Cảnh: Tấn công hoặc bị tấn công đều có thể nhận được hộ thể thuẫn, hấp thu sát thương và duy trì tạo sát thương Dương ra xung quanh, và giảm nội phòng của mục tiêu, duy trì 8 giây. Khi hộ thể thuẫn bị phá, sẽ mất hiệu quả của Niết Bàn Hóa Cảnh."], ["Niết Bàn Hóa Cảnh: Tấn công hoặc bị tấn công đều có thể nhận được hộ thể thuẫn, hấp thu sát thương và duy trì tạo sát thương Dương ra xung quanh, và giảm nội phòng của mục tiêu, duy trì 9 giây. Khi hộ thể thuẫn bị phá, sẽ mất hiệu quả của Niết Bàn Hóa Cảnh."], ["Niết Bàn Hóa Cảnh: Tấn công hoặc bị tấn công đều có thể nhận được hộ thể thuẫn, hấp thu sát thương và duy trì tạo sát thương Dương ra xung quanh, và giảm nội phòng của mục tiêu, duy trì 10 giây. Bất kể hộ thể thuẫn biến mất bởi bất kỳ phương thức nào, đền gây sát thương nổ ra xung quanh, làm bị thương và giảm 30% sát thương của mục tiêu, duy trì 10 giây."]]'
            ],
            [
                "id" => 20,
                "name" => "Thanh Liên Bí Lục",
                "slug" => "thanh-lien-bi-luc",
                "max_level" => 49,
                "rank" => 6,
                "max_rage" => 130,
                "school_id" => 3,
                "type" => "1",
                "desc" => 'Ban đầu là võ học Đạo Gia, sau thêm vào các huyền bí tinh diệu của Phật Pháp. Tâm pháp nói "Thanh liên hoa khai, khả tụ hương hồn", nội công này chú trọng phòng thủ, nghiên cứu tìm kiếm cơ hội sống trong bước đường cùng.',
                "effect_ext" => '["", ["Hoa Khai Hữu Thời: Mỗi lần bị tấn công hoặc tấn công nhận được 1 tầng trạng thái “Hoa Bại”, chồng 6 tầng sẽ xóa và nhận được trạng thái “Hoa Khai” giúp bản thân khi bị tấn công có thể đỡ được 15% sát thương và khi sát thương mục tiêu sẽ cộng thêm 15% sát thương nhu, trong thời gian đó số lần tấn công và bị tấn công đạt 3 lần sẽ xóa.", "Thanh Liên Tụ Hồn: Đỡ 1 lần sát thương chí tử, lập tức hồi phục 8% khí huyết, hồi 45s."], ["Hoa Khai Hữu Thời: Mỗi lần bị tấn công hoặc tấn công nhận được 1 tầng trạng thái “Hoa Bại”, chồng 6 tầng sẽ xóa và nhận được trạng thái “Hoa Khai” giúp bản thân khi bị tấn công có thể đỡ được 18% sát thương và khi sát thương mục tiêu sẽ cộng thêm 18% sát thương nhu, trong thời gian đó số lần tấn công và bị tấn công đạt 3 lần sẽ xóa.", "Thanh Liên Tụ Hồn: Đỡ 1 lần sát thương chí tử, lập tức hồi phục 9% khí huyết, hồi 45s."], ["Hoa Khai Hữu Thời: Mỗi lần bị tấn công hoặc tấn công nhận được 1 tầng trạng thái “Hoa Bại”, chồng 6 tầng sẽ xóa và nhận được trạng thái “Hoa Khai” giúp bản thân khi bị tấn công có thể đỡ được 21% sát thương và khi sát thương mục tiêu sẽ cộng thêm 21% sát thương nhu, trong thời gian đó số lần tấn công và bị tấn công đạt 3 lần sẽ xóa.", "Thanh Liên Tụ Hồn: Đỡ 1 lần sát thương chí tử, lập tức hồi phục 10% khí huyết, hồi 45s."], ["Hoa Khai Hữu Thời: Mỗi lần bị tấn công hoặc tấn công nhận được 1 tầng trạng thái “Hoa Bại”, chồng 6 tầng sẽ xóa và nhận được trạng thái “Hoa Khai” giúp bản thân khi bị tấn công có thể đỡ được 25% sát thương và khi sát thương mục tiêu sẽ cộng thêm 25% sát thương nhu, trong thời gian đó số lần tấn công và bị tấn công đạt 3 lần sẽ xóa.", "Thanh Liên Tụ Hồn: Đỡ 1 lần sát thương chí tử, lập tức hồi phục 12% khí huyết, hồi 45s."], ["Hoa Khai Hữu Thời: Mỗi lần bị tấn công hoặc tấn công nhận được 1 tầng trạng thái “Hoa Bại”, chồng 6 tầng sẽ xóa và nhận được trạng thái “Hoa Khai” giúp bản thân khi bị tấn công có thể đỡ được 30% sát thương và khi sát thương mục tiêu sẽ cộng thêm 30% sát thương nhu, trong thời gian đó số lần tấn công và bị tấn công đạt 3 lần sẽ xóa.", "Thanh Liên Tụ Hồn: Đỡ 1 lần sát thương chí tử, lập tức hồi phục 15% khí huyết, đánh lui mục tiêu địch xung quanh và gây định thân 3s, hồi 45s."]]'
            ],
            [
                "id" => 21,
                "name" => "Nga My Hội Ý Công",
                "slug" => "nga-my-hoi-y-cong",
                "max_level" => 5,
                "rank" => 7,
                "max_rage" => 130,
                "school_id" => 3,
                "type" => "1",
                "desc" => 'Nội công nghiên tu, càng lên cao  càng đòi hỏi "ôn tập" và "ý hội". Ta học hỏi từ cái cũ mọi lúc, và bất cứ khi nào có điều gì mới, những gì ta đã học được nằm ở bên ta, và nó phải là vô tận.',
                "effect" => '["","", "妄图攻击自身的敌人，有一定几率被刺骨“寒意侵袭”，打断目标招式，并造成短暂硬直。", "", "", ""]',
                "effect_ext" => '["", ["舒活经脉: 每次出招攻击都能在5秒内恢复2%的最大气血，有几率恢复双倍气血", "凌空换气: 穿云纵后可凌空换气，3秒内可连续穿云纵. 内力上限提高200点，罡气提高20"], ["舒活经脉: 每次出招攻击都能在5秒内恢复2%的最大气血，有几率恢复双倍气血", "凌空换气: 穿云纵后可凌空换气，3秒内可连续穿云纵. 内力上限提高200点，罡气提高20"], ["被攻击时，有一定几率触发玉洁冰清: 移除自身大部分负面状态、恢复少量招架耐力、外功招架及内功化解加18、在15秒内攻击附加阴伤害。"], ["涅槃化境: 攻击或被攻击都可能获得护体盾，吸收伤害同时对周围持续造成阳伤害，并降低目标的内功防御，持续10秒。无论护体盾以何种方式消失，都会对周围造成一次爆炸伤害，使被伤及的目标攻击伤害降低30%,持续10秒。"],  ["花开有时: 每次攻击可获得一层“花开”状态，叠加6层后移除并获得“花开有时”状态使自身伤害提高15%，暴击伤害提高30%，暴击敌人可为自己恢复已损失5%的气血，攻击总次数达到3次后移除（使用非峨眉门派武学将立即清除“花开”及“花开有时”）。","花落无期: 每次被攻击可获得一层“花落”状态，叠加6层后移除并获得“花落无期”状态使自身被攻击能抵挡30%伤害，被攻击总次数达到3次后移除。","青莲聚魂: 抵挡一次致死伤害，立即回复30%的气血，并为自己释放一次【金顶佛光】及2秒黄霸体效果，同时击退周围敌方目标并使其定身3秒，120秒调息时间。（每定身到一名敌方目标均能使青莲聚魂的调息时间降低5秒，最多降低至70秒）。"]]'
            ],
            [
                "id" => 22,
                "name" => "Tiêu Dao Tâm Pháp",
                "slug" => "tieu-dao-tam-phap",
                "max_level" => 36,
                "rank" => 1,
                "max_rage" => 90,
                "school_id" => 4,
                "type" => "0",
                "desc" => 'Nội Công Tâm Pháp cơ bản của Cái Bang, "Không gì ngoài Ngũ Dục, chữa lành vết thương, ung dung tự tại". Cái Bang Đệ Tử xưa nay thoải mái, tự do tự tại, ung dung đi hết Thế Gian.',
                "effect" => '["","Cách mỗi 16 giây, lần sau công kích tạo thành sát thương x 1,5 lần kèm sát thương dương vượt mức, khiến mục tiêu giảm tốc duy trì 3 giây","Cách mỗi 13 giây, lần sau công kích tạo thành sát thương x 1,5 lần kèm sát thương dương vượt mức, khiến mục tiêu giảm tốc duy trì 3 giây","Cách mỗi 10 giây, lần sau công kích tạo thành sát thương x 1,5 lần kèm sát thương dương vượt mức, khiến mục tiêu giảm tốc duy trì 3 giây","Cách mỗi 8 giây, lần sau công kích tạo thành sát thương x 1,5 lần kèm sát thương dương vượt mức, khiến mục tiêu giảm tốc duy trì 3 giây, mục tiêu tàn phế khiến phía địch xung quanh tăng tốc 25%, duy trì 15 giây"]',
            ],
            [
                "id" => 23,
                "name" => "Ngọc Dương Thần Công",
                "slug" => "ngoc-duong-than-cong",
                "max_level" => 36,
                "rank" => 2,
                "max_rage" => 100,
                "school_id" => 4,
                "type" => "0",
                "desc" => 'Cái Bang quan trọng Nội Công Tâm Pháp, Công Pháp chú trọng: càn khôn Âm Dương, bổ trợ cho nhau, Ngũ Hành bát Quái, khống chế lẫn nhau, lấy Khí của trời đất để tập trung tâm thần, nâng cao tự thân Tu Vi.',
                "effect" => '["","Làm cho công kích có thể hấp thu tinh khí, mỗi khi chồng đến tầng 9, lần công kích sau làm rời rạc tinh khí tương ứng của mục tiêu, khiến mục tiêu chịu sát thương của lực tay bản thân","Làm cho công kích có thể hấp thu tinh khí, mỗi khi chồng đến tầng 7, lần công kích sau làm rời rạc tinh khí tương ứng của mục tiêu, khiến mục tiêu chịu sát thương của lực tay bản thân","Làm cho công kích có thể hấp thu tinh khí, mỗi khi chồng đến tầng 6, lần công kích sau làm rời rạc tinh khí tương ứng của mục tiêu, khiến mục tiêu chịu sát thương của lực tay bản thân","Không chỉ công kích có thể hấp thu, chống đỡ cũng có xác suất nhất định đạt được tinh khí, mỗi khi chồng đến tầng 5, lần công kích sau làm rời rạc tinh khí tương ứng của mục tiêu, khiến mục tiêu chịu sát thương của lực tay bản thân"]',
            ],
            [
                "id" => 24,
                "name" => "Giáng Long Tâm Pháp",
                "slug" => "giang-long-tam-phap",
                "max_level" => 36,
                "rank" => 3,
                "max_rage" => 110,
                "school_id" => 4,
                "type" => "0",
                "desc" => 'Đại Thành của Cái Bang Tập Nội Công Pháp, chí cương chí mãnh. Trời đất hỗn loạn, nhận Vạn Vật làm Linh, sinh ra Ngũ Hành, định ra Bát Quái, diễn tiếp Vũ Trụ hồng hoang, vô cùng kỳ diệu.',
                "effect_ext" => '["",["Long Ngâm: Mỗi lần công kích đều có xác suất tạo cho mục tiêu hiện tại sát thương dương 10% Khí huyết (nhiều nhất tạo thành 458 điểm).","Điều Tức: Lúc Tọa Thiền Điều Tức mỗi giây hồi phục 7 điểm khinh công; còn có thể bức rượu ra, dần tỉnh rượu"],["Long Ngâm: Mỗi lần công kích đều có xác suất tạo cho mục tiêu hiện tại sát thương dương 10% Khí huyết (nhiều nhất tạo thành 458 điểm).","Điều Tức: Lúc Tọa Thiền Điều Tức mỗi giây hồi phục 7 điểm khinh công; còn có thể bức rượu ra, dần tỉnh rượu"],["Long Ngâm: Mỗi lần công kích đều xác suất tạo cho mục tiêu hiện tại sát thương dương 10%HP  (nhiều nhất tạo thành 614 điểm)","Điều Tức: Lúc Tọa Thiền Điều Tức mỗi giây hồi phục 7 điểm khinh công; còn có thể bức rượu ra, dần tỉnh rượu"],["Long Ngâm: Mỗi lần công kích đều xác suất tạo cho mục tiêu hiện tại sát thương dương 10%  Khí huyết (nhiều nhất tạo thành 786 điểm)","Điều Tức: Lúc Tọa Thiền Điều Tức mỗi giây hồi phục 7 điểm khinh công; còn có thể bức rượu ra, dần tỉnh rượu"]]',
            ],
            [
                "id" => 25,
                "name" => "Tửu Vũ Thần Công",
                "slug" => "tuu-vu-than-cong",
                "max_level" => 49,
                "rank" => 4,
                "max_rage" => 120,
                "school_id" => 4,
                "type" => "0",
                "desc" => 'Do Đỗ Khang sáng tạo, sau truyền lại cho Cái Bang, được đại trưởng lão nghiên cứu sửa đổi thành thần công, tâm pháp giảng giải "hình say ý không say, ý say thần không say". Công pháp không theo khuôn mẫu, khi gặp địch, trời đất đều say.',
                "effect" => '["","Khi bắt đầu tấn công, có xác suất phát ra \"Tửu Vũ\", mục tiêu bị \"Tửu Vũ\" bắn phải trong 18s giảm mạnh ngoại phòng ngự và né, tăng 10% xác suất bạo kích.","Khi bắt đầu tấn công, có xác suất phát ra \"Tửu Vũ\", mục tiêu bị \"Tửu Vũ\" bắn phải trong 20s giảm mạnh ngoại phòng ngự và né, tăng 12% xác suất bạo kích.","Khi bắt đầu tấn công, có xác suất phát ra \"Tửu Vũ\", mục tiêu bị \"Tửu Vũ\" bắn phải trong 22s giảm mạnh ngoại phòng ngự và né, tăng 14% xác suất bạo kích.","Khi bắt đầu tấn công, có xác suất phát ra \"Tửu Vũ\", mục tiêu bị \"Tửu Vũ\" bắn phải trong 25s giảm mạnh ngoại phòng ngự và né, tăng 16% xác suất bạo kích.","Khi bắt đầu tiến công, có xác suất bắn ra \"Tửu Vũ\", mục tiêu bị \"Tửu Vũ\" thấm ướt trong 30s giảm mạnh ngoại phòng và né đòn, xác suất bạo kích tăng 18%."]',
                "effect_ext" => '["",["Tửu Túy: Khi kích hoạt Tửu Vũ, bản thân nhận \"Tửu Túy\", liên tục cung cấp hiệu quả \"Tửu Thần\", lúc này mỗi lần xuất chiêu sẽ tốn 1 tầng \"Tửu Thần\", hiệu quả \"Tửu Thần\" còn lại khi công kích sẽ tăng thêm sát thương dương.","Tửu Tỉnh: Công kích khi có \"Tửu Thần\" đều kích hoạt hiệu quả \"Tửu Tỉnh\", tăng thêm 10% xác suất bạo kích bản thân, duy trì 7s."],["Tửu Túy: Khi kích hoạt Tửu Vũ, bản thân nhận \"Tửu Túy\", liên tục cung cấp hiệu quả \"Tửu Thần\", lúc này mỗi lần xuất chiêu sẽ tốn 1 tầng \"Tửu Thần\", hiệu quả \"Tửu Thần\" còn lại khi công kích sẽ tăng thêm sát thương dương.","Tửu Tỉnh: Công kích khi có \"Tửu Thần\" đều kích hoạt hiệu quả \"Tửu Tỉnh\", tăng thêm 10% xác suất bạo kích bản thân, duy trì 8s."],["Tửu Túy: Khi kích hoạt Tửu Vũ, bản thân nhận \"Tửu Túy\", liên tục cung cấp hiệu quả \"Tửu Thần\", lúc này mỗi lần xuất chiêu sẽ tốn 1 tầng \"Tửu Thần\", hiệu quả \"Tửu Thần\" còn lại khi công kích sẽ tăng thêm sát thương dương.","Tửu Tỉnh: Công kích khi có \"Tửu Thần\" đều kích hoạt hiệu quả \"Tửu Tỉnh\", tăng thêm 10% xác suất bạo kích bản thân, duy trì 9s."],["Tửu Túy: Khi kích hoạt Tửu Vũ, bản thân nhận \"Tửu Túy\", liên tục cung cấp hiệu quả \"Tửu Thần\", lúc này mỗi lần xuất chiêu sẽ tốn 1 tầng \"Tửu Thần\", hiệu quả \"Tửu Thần\" còn lại khi công kích sẽ tăng thêm sát thương dương.","Tửu Tỉnh: Công kích khi có \"Tửu Thần\" đều kích hoạt hiệu quả \"Tửu Tỉnh\", tăng thêm 10% xác suất bạo kích bản thân, duy trì 10s."],["Tửu Túy: Khi kích hoạt Tửu Vũ, bản thân nhận \"Tửu Túy\", hiệu quả \"Tửu Thần\" tăng cao, lúc này mỗi lần xuất chiêu sẽ tốn 1 tầng \"Tửu Thần\", khi hiệu quả \"Tửu Thần\" còn lại nếu công kích sẽ tăng thêm sát thương âm.","Tửu Tỉnh: Công kích khi có \"Tửu Thần\" đều có thể kích hoạt hiệu quả \"Tửu Tỉnh\", bạo kích bản thân có xác suất tăng thêm 10%, duy trì 12s."]]',
            ],
            [
                "id" => 26,
                "name" => "Cầm Long Công",
                "slug" => "cam-long-cong",
                "max_level" => 49,
                "rank" => 5,
                "max_rage" => 130,
                "school_id" => 4,
                "type" => "0",
                "desc" => 'Cái Bang hào mại kì công, được lập bởi nhất đại anh hùng Kiều Phong bang chủ, có nguồn gốc đa phần từ võ công Phật Học. "Trượng phu hào khí việt hùng quan, hãn hải trầm phù túy tỉnh gian. Đạo nghĩa dịch cầu thiên đấu tửu, gia bang nan cố lưỡng sầu sơn", công ví như danh, lấy công lực thâm hậu giá ngự chân khí, cầm long khống hạc, bá khí vô phương. Người tu luyện thành có thể ngự khí lưu truyền, xuyên qua không gian, thấu không cầm vật, thực lực kỳ công thiên hạ!',
                "effect_ext" => '["",["Thanh Long Xuất Thủy: Tăng 1 ít sát thương mỗi đòn đánh của bản thân.","Cầm Long Thức: Xuất chiêu có tỷ lệ khiến đòn tấn công này có tỷ lệ bạo kích lớn và kèm theo sát thương tiễn xạ, mục tiêu bị tiễn xạ sẽ giảm 40% tốc độ di chuyển."],["Thanh Long Xuất Thủy: Tăng 1 ít sát thương mỗi đòn đánh của bản thân.","Cầm Long Thức: Xuất chiêu có tỷ lệ khiến đòn tấn công này có tỷ lệ bạo kích lớn và kèm theo sát thương tiễn xạ, mục tiêu bị tiễn xạ sẽ giảm 40% tốc độ di chuyển."],["Thanh Long Xuất Thủy: Tăng 1 ít sát thương mỗi đòn đánh của bản thân.","Cầm Long Thức: Xuất chiêu có tỷ lệ khiến đòn tấn công này có tỷ lệ bạo kích lớn và kèm theo sát thương tiễn xạ, mục tiêu bị tiễn xạ sẽ giảm 40% tốc độ di chuyển."],["Thanh Long Xuất Thủy: Tăng 1 ít sát thương mỗi đòn đánh của bản thân.","Cầm Long Thức: Xuất chiêu có tỷ lệ khiến đòn tấn công này có tỷ lệ bạo kích lớn và kèm theo sát thương tiễn xạ, mục tiêu bị tiễn xạ sẽ giảm 40% tốc độ di chuyển."],["Thanh Long Xuất Thủy: Tăng 1 ít sát thương mỗi đòn đánh của bản thân.","Cầm Long Thức: Xuất chiêu có tỷ lệ khiến đòn tấn công này có tỷ lệ bạo kích lớn và kèm theo sát thương tiễn xạ, mục tiêu bị tiễn xạ sẽ giảm 40% tốc độ di chuyển.","Tướng Quân Lệnh: Khi kích hoạt “Cầm Long Thức” khiến mục tiêu bị dính đòn lan trong 3 giây không thể thi triển khinh công."]]',
            ],
            [
                "id" => 27,
                "name" => "Thiên Nguyên Tâm Pháp",
                "slug" => "thien-nguyen-tam-phap",
                "max_level" => 49,
                "rank" => 6,
                "max_rage" => 130,
                "school_id" => 4,
                "type" => "0",
                "desc" => 'Thiên Nguyên Tâm Pháp là tâm pháp nội công chí cao truyền đời của Cái Bang, là 1 trong những công pháp rất bá đạo, người thiên nguyên, chí cao vô thượng, lấy linh hồn vạn vật làm dung môi, tinh tú nhật nguyệt làm vũ khí, hải ngự bách xuyên, tụ hội trong cơ thể, khi đại thừa lấy khí ngự vật, thắng lợi ngoài 3 trượng.',
                "effect_ext" => '["",["Thạch Phá Thiên Kinh: Khi tấn công có tỷ lệ khiến bản thân trong 8s bỏ qua tất cả miễn giảm phòng ngự tăng 15%.","Phần Nguyệt Quy Nguyên: Khi tấn công có tỷ lệ gây thêm sát thương dương cho mục tiêu."],["Thạch Phá Thiên Kinh: Khi tấn công có tỷ lệ khiến bản thân trong 9s bỏ qua tất cả miễn giảm phòng ngự tăng 18%.","Phần Nguyệt Quy Nguyên: Khi tấn công có tỷ lệ gây thêm sát thương dương cho mục tiêu."],["Thạch Phá Thiên Kinh: Khi tấn công có tỷ lệ khiến bản thân trong 10s bỏ qua tất cả miễn giảm phòng ngự tăng 21%.","Phần Nguyệt Quy Nguyên: Khi tấn công có tỷ lệ gây thêm sát thương dương cho mục tiêu."],["Thạch Phá Thiên Kinh: Khi tấn công có tỷ lệ khiến bản thân trong 11s bỏ qua tất cả miễn giảm phòng ngự tăng 25%.","Phần Nguyệt Quy Nguyên: Khi tấn công có tỷ lệ gây thêm sát thương dương cho mục tiêu."],["Thạch Phá Thiên Kinh: Khi tấn công có tỷ lệ khiến bản thân trong 12s bỏ qua tất cả miễn giảm phòng ngự tăng 30%.","Phần Nguyệt Quy Nguyên: Khi tấn công có tỷ lệ gây thêm sát thương dương cho mục tiêu.","Thiên Nguyên Phá Võ: Khi bị tấn công có tỷ lệ xóa một phần hiệu quả loại tấn công của đối phương như cộng thêm sát thương, bỏ qua miễn giảm phòng ngự, giúp trực tiếp hoặc gián tiếp tăng trạng thái sát thương."]]',
            ],
            [
                "id" => 28,
                "name" => "Cái Bang Hội Ý Công",
                "slug" => "cai-bang-hoi-y-cong",
                "max_level" => 5,
                "rank" => 7,
                "max_rage" => 130,
                "school_id" => 4,
                "type" => "0",
                "desc" => 'Nội công nghiên tu, càng lên cao  càng đòi hỏi "ôn tập" và "ý hội". Ta học hỏi từ cái cũ mọi lúc, và bất cứ khi nào có điều gì mới, những gì ta đã học được nằm ở bên ta, và nó phải là vô tận.',
                "effect" => '["","","","Khi bắt đầu tiến công, có xác suất bắn ra \"Tửu Vũ\", mục tiêu bị \"Tửu Vũ\" thấm ướt trong 30s giảm mạnh ngoại phòng và né đòn, xác suất bạo kích tăng 18%.","",""]',
                "effect_ext" => '["", ["龙吟: 每次攻击都有几率造成目标当前气血10%的阳伤害（最多造成983点）","调息: 打坐调息时可每秒恢复7点轻功值；且能逼出喝下酒，从醉酒中逐渐恢复清醒"],["龙吟: 每次攻击都有几率造成目标当前气血10%的阳伤害（最多造成983点）","调息: 打坐调息时可每秒恢复7点轻功值；且能逼出喝下酒，从醉酒中逐渐恢复清醒"],["Tửu Túy: Khi kích hoạt Tửu Vũ, bản thân nhận \"Tửu Túy\", hiệu quả \"Tửu Thần\" tăng cao, lúc này mỗi lần xuất chiêu sẽ tốn 1 tầng \"Tửu Thần\", khi hiệu quả \"Tửu Thần\" còn lại nếu công kích sẽ tăng thêm sát thương âm.","Tửu Tỉnh: Công kích khi có \"Tửu Thần\" đều có thể kích hoạt hiệu quả \"Tửu Tỉnh\", bạo kích bản thân có xác suất tăng thêm 10%, duy trì 12s."],["Thanh Long Xuất Thủy: Tăng 1 ít sát thương mỗi đòn đánh của bản thân.","Cầm Long Thức: Xuất chiêu có tỷ lệ khiến đòn tấn công này có tỷ lệ bạo kích lớn và kèm theo sát thương tiễn xạ, mục tiêu bị tiễn xạ sẽ giảm 40% tốc độ di chuyển.","Tướng Quân Lệnh: Khi kích hoạt “Cầm Long Thức” khiến mục tiêu bị dính đòn lan trong 3 giây không thể thi triển khinh công."],["Thạch Phá Thiên Kinh: Khi tấn công có tỷ lệ khiến bản thân trong 15s bỏ qua tất cả miễn giảm phòng ngự tăng 30%.","Phần Nguyệt Quy Nguyên: Khi tấn công có tỷ lệ gây thêm sát thương dương cho mục tiêu đồng thời giảm thời gian 4s thời gian hồi chiêu của Thạch Phá Thiên Kinh.","Thiên Nguyên Phá Võ: Khi bị tấn công có tỷ lệ xóa một phần hiệu quả loại tấn công của đối phương như cộng thêm sát thương, bỏ qua miễn giảm phòng ngự, giúp trực tiếp hoặc gián tiếp tăng trạng thái sát thương."]]',
            ],
        ];
        $table = $this->table("inner");
        $table->truncate();

        foreach ($data as $d) {
            $d["created_at"] = date("Y-m-d H:i:s");
            $d["updated_at"] = date("Y-m-d H:i:s");
            $table->insert($d)
                ->save();
        }
    }
}
