<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductDescController extends Controller
{
    public function show($slug)
{
    $products = [
        'fixed-speed-screw-compressor' => [
            'name' => 'Fixed Speed Screw Compressor',
            'image' => '1.png',
            'description' => 'เครื่องอัดอากาศหรือปั๊มลมแบบความเร็วคงที่ (fixed-speed air compressor) เป็นปั๊มลมที่ใช้กันในระบบอัดอากาศแบบดั้งเดิม ที่ไม่สามารถปรับความเร็วรอบมอเตอร์ได้ ไม่ว่าคุณจะมีกำลังการผลิตมากหรือน้อยก็ต้องใช้ความเร็วรอบมอเตอร์ตามที่คุณซื้อมาไม่สามารถปรับได้ตามการใช้งานจริง ทำให้กินพลังงานเป็นอย่างมาก',
            'specs' => 'ข้อมูลจำเพาะของสินค้า...',
        ],
        'permanent-magnet-variable-speed' => [
            'name' => 'Permanent Magnet Variable Speed',
            'image' => '2.png',
            'description' => 'Adopt the most advanced technical speed regulating electric motor-permanent magnetic motor, efficiency can be up to 97%, higher by 3%-4% than common frequency conversion device and motors type, saving energy obviously.',
            'specs' => 'ข้อมูลจำเพาะของสินค้า...',
        ],
        'refrigerated-air-dryer'=> [
            'name' => 'Refrigerated Air dryer',
            'image' => 'ad1.png',
            'description' => 'Refrigerated Air dryer',
            'specs' => 'ข้อมูลจำเพาะของสินค้า...',
        ]
    ];

    if (!array_key_exists($slug, $products)) {
        abort(404);
    }

    return view('client.product.product_detail', ['product' => $products[$slug]]);
}
}
