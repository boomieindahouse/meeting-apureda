<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($slug)
    {
        // ข้อมูลสินค้าตัวอย่าง (คุณอาจใช้ฐานข้อมูลแทน)
        $products = [
            'fixed-speed-screw-compressor' => [
                'name' => 'Fixed Speed Screw Compressor',
                'image' => '1.png',
                'description' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
        Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna,
        vel scelerisque nisl consectetur et.',
                'specs' => 'ข้อมูลจำเพาะของสินค้า...',
            ],
            'permanent-magnet-variable-speed' => [
                'name' => 'Permanent Magnet Variable Speed',
                'image' => '2.png',
                'description' => 'รายละเอียดสินค้า...',
                'specs' => 'ข้อมูลจำเพาะของสินค้า...',
            ]
        ];

        // ค้นหาสินค้าตาม slug
        if (!array_key_exists($slug, $products)) {
            abort(404); // ถ้าไม่มีสินค้า ให้แสดงหน้า 404
        }

        return view('client.product.product_detail', ['product' => $products[$slug]]);
    }
}
