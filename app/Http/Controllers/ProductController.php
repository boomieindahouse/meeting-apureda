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
                ['name' => 'Fixed Speed Screw Compressor', 'image' => '1.png'],
                ['name' => 'Permanent Magnet Variable Speed', 'image' => '2.png'],
                ['name' => 'Tank Mounted Compressor with Air Dryer', 'image' => '3.png'],
                ['name' => 'Two-Stage Permanent Magnet Variable Speed', 'image' => '4.png'],
                ['name' => 'PET High Pressure Piston Compressor', 'image' => '5.png'],
                ['name' => 'High Pressure Screw Compressor', 'image' => '6.png'],
                ['name' => 'Screw Compressor+Booster Combination Compressor', 'image' => '7.png'],
                ['name' => ' High Pressure Oil Free Screw Compressor', 'image' => '8.png'],
                ['name' => 'Oil Free Screw Compressor', 'image' => '9.png'],
                ['name' => 'Oil Free Scroll Compressor', 'image' => '10.png'],
                ['name' => 'Oil Free Screw Blower', 'image' => '11.png'],
                ['name' => ' Low Pressure Oil Free Screw Compressor', 'image' => '12.png'],
            ],
            'air-dryer' => [
                ['name' => 'Refrigerated Air Dryer', 'image' => 'dryer1.jpg'],
                ['name' => 'Heatless Desiccant Air Dryer', 'image' => 'dryer2.jpg'],
            ],
            'air-filter' => [
                ['name' => 'Pipeline Filter', 'image' => 'filter1.jpg'],
                ['name' => 'Activated Carbon Filter', 'image' => 'filter2.jpg'],
            ],
        ];

        // Mapping หมวดหมู่ให้เป็นชื่อเดียวกับ Sidebar
        $categoryNames = [
            'air-compressor' => 'เครื่องอัดลม (Air Compressor)',
            'air-dryer' => 'เครื่องทำลมแห้ง (Air Dryer)',
            'air-filter' => 'ไส้กรองลม (Pipeline Filter)',
        ];

        // Mapping หมวดหมู่ให้มีคำอธิบาย (description)
        $categoryDescriptions = [
            'air-compressor' => 'เครื่องอัดลมคืออุปกรณ์ที่ช่วยเพิ่มแรงดันของอากาศ โดยใช้สำหรับงานอุตสาหกรรม และเครื่องจักรต่างๆ',
            'air-dryer' => 'เครื่องทำลมแห้งช่วยลดความชื้นในระบบอัดอากาศ เพื่อป้องกันการกัดกร่อนและการสะสมของน้ำในท่อ',
            'air-filter' => 'ไส้กรองลมช่วยกำจัดสิ่งสกปรก ฝุ่น และน้ำมันออกจากอากาศอัด เพื่อให้ได้อากาศที่สะอาดและปลอดภัย',
        ];

        // ถ้าไม่มีหมวดหมู่ หรือหมวดหมู่ไม่ถูกต้อง ให้ใช้ค่าเริ่มต้น
        if (!$category || !array_key_exists($category, $allProducts)) {
            $category = 'air-compressor'; // ตั้งค่าเริ่มต้นเป็น 'air-compressor'
        }

        $products = $allProducts[$category]; // ดึงสินค้าของหมวดหมู่
        $categoryName = $categoryNames[$category]; // ดึงชื่อหมวดหมู่
        $categoryDescription = $categoryDescriptions[$category]; // ดึงคำอธิบายของหมวดหมู่

        // ส่งค่า $categoryName, $categoryDescription และ $products ไปที่ View
        return view('client.category', compact('products', 'category', 'categoryName', 'categoryDescription'));
    }
}
