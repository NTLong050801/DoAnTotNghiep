<?php

namespace Database\Seeders;

use App\Models\Major;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MajorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Major::create([
            'name' => "Thú y"
        ]);
        Major::create([
            'name' => "Chăn nuôi thú y – Thuỷ sản"
        ]);
        Major::create([
            'name' => "Nông nghiệp sinh thái và Nông nghiệp đô thị"
        ]);
        Major::create([
            'name' => "Công nghệ kỹ thuật ô tô và Cơ điện tử"
        ]);
        Major::create([
            'name' => "Kỹ thuật cơ khí"
        ]);
        Major::create([
            'name' => "Kỹ thuật điện, Điện tử và Tự động hoá"
        ]);
        Major::create([
            'name' => "Logistics và Quản lý chuỗi cung ứng"
        ]);
        Major::create([
            'name' => "Quản trị kinh doanh, Thương mại và Du lịch"
        ]);
        Major::create([
            'name' => "Công nghệ sinh học và Công nghệ dược liệu"
        ]);
        Major::create([
            'name' => "Công nghệ thực phẩm và Chế biến"
        ]);
        Major::create([
            'name' => "Kinh tế và Quản lý"
        ]);
        Major::create([
            'name' => "Xã hội học"
        ]);
        Major::create([
            'name' => "Luật"
        ]);
        Major::create([
            'name' => "Công nghệ thông tin và Kỹ thuật số"
        ]);
        Major::create([
            'name' => "Quản lý đất đai, Bất động sản và Môi trường"
        ]);
        Major::create([
            'name' => "Khoa học môi trường"
        ]);
        Major::create([
            'name' => "Ngôn ngữ Anh"
        ]);
        Major::create([
            'name' => "Sư phạm công nghệ"
        ]);

    }
}
