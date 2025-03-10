<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function showCategory()
    {
        // ข้อมูลสินค้า (ตัวอย่าง)
        $products = [
            (object)['name' => 'Fixed Speed Screw Compressor', 'image' => '1.png'],
            (object)['name' => 'Permanent Magnet Variable Speed', 'image' => '2.png'],
            (object)['name' => 'Tank Mounted Compressor with Air Dryer', 'image' => '3.png'],
            (object)['name' => 'Two-Stage Permanent Magnet Variable Speed', 'image' => '4.png'],
            (object)['name' => 'PET High Pressure Piston Compressor', 'image' => '5.png'],
            (object)['name' => 'High Pressure Screw Compressor', 'image' => '6.png'],
            (object)['name' => 'Screw Compressor+Booster Combination Compressor', 'image' => '7.png'],
            (object)['name' => ' High Pressure Oil Free Screw Compressor', 'image' => '8.png'],
            (object)['name' => 'Oil Free Screw Compressor', 'image' => '9.png'],
            (object)['name' => 'Oil Free Scroll Compressor', 'image' => '10.png'],
            (object)['name' => 'Oil Free Screw Blower', 'image' => '11.png'],
            (object)['name' => ' Low Pressure Oil Free Screw Compressor', 'image' => '12.png'],
        ];

        // ส่งตัวแปร $products ไปยัง View
        return view('client.category', compact('products'));
    }
}
