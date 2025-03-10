<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($category = null)
    {
        // ข้อมูลสินค้า ตัวอย่าง
        $allProducts = [
            'air-compressor' => [
                ['name' => 'Fixed Speed Screw Compressor', 'image' => '1.png', 'pdf' => 'test.pdf'],
                ['name' => 'Permanent Magnet Variable Speed', 'image' => '2.png', 'pdf' => 'permanent-magnet-variable-speed.pdf'],
            ],
            'air-dryer' => [
                ['name' => 'Refrigerated Air Dryer', 'image' => 'ad1.png'],
                ['name' => 'Heatless Desiccant Air Dryer', 'image' => 'ad2.png'],
            ]
        ];

        // Mapping หมวดหมู่ให้เป็นชื่อเดียวกับ Sidebar
        $categoryNames = [
            'air-compressor' => 'เครื่องอัดลม (Air Compressor)',
            'air-dryer' => 'เครื่องทำลมแห้ง (Air Dryer)',
        ];

        $categoryDescriptions = [
            'air-compressor' => 'เครื่องอัดลมคืออุปกรณ์ที่ช่วยเพิ่มแรงดันของอากาศ...',
            'air-dryer' => 'เครื่องทำลมแห้งช่วยลดความชื้นในระบบอัดอากาศ...',
        ];

        // ถ้าไม่มีหมวดหมู่ หรือหมวดหมู่ไม่ถูกต้อง ให้ใช้ค่าเริ่มต้น
        if (!$category || !array_key_exists($category, $allProducts)) {
            $category = 'air-compressor';
        }

        $products = $allProducts[$category];
        $categoryName = $categoryNames[$category];
        $categoryDescription = $categoryDescriptions[$category];

        return view('client.category', compact('products', 'category', 'categoryName', 'categoryDescription'));
    }
}
