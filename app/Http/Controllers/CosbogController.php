<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CosbogController extends Controller
{
    public function showAluminiumPipe()
    {
        $features = [
            [
                'icon' => asset('images/cosbog/icons/cosbog.png'),
                'title' => 'ท่ออลูมิเนียม CosBog',
                'description' => 'ท่ออลูมิเนียม ดีกว่า ท่อกัลวาไนซ์ อย่างไร',
                'is_header' => true // เพิ่มตัวบอกว่าเป็น Header
            ],
            [
                'icon' => asset('images/cosbog/icons/corrosion.png'),
                'title' => 'ทนทานต่อการกัดกร่อน',
                'description' => 'ในท่อลมของระบบลมอัดจะมีฝุ่น น้ำและความชื้นตลอดเวลา ด้วยคุณสมบัติของท่ออลูมิเนียมที่ไม่เป็นสนิม และทนต่อ การกัดกร่อนสูง จึงช่วยลดความเสี่ยงของการปนเปื้อน ในระบบลมอัด และช่วยรักษาคุณภาพลมให้สะอาด'
            ],
            [
                'icon' => asset('images/cosbog/icons/lightweight.png'),
                'title' => 'น้ำหนักเบา',
                'description' => 'ท่ออลูมิเนียมมีน้ำหนักเบากว่าท่อเหล็กมาก ทำให้ติดตั้งง่าย และเสร็จไว ประหยัดเวลาการทำงานและค่าแรงติดตั้ง ในกรณีที่ต้องการปรับปรุงหรือเคลื่อนย้ายระบบก็สามารถถอดประกอบและติดตั้งใหม่ได้ง่าย'
            ],
            [
                'icon' => asset('images/cosbog/icons/safety.png'),
                'title' => 'ติดตั้งง่าย สะอาด ปลอดภัย',
                'description' => 'การติดตั้งท่ออลูมิเนียมจะใช้ชุดข้อต่อในการประกอบ ไม่ต้องเชื่อม หน้างานติดตั้งจึงมีความสะอาดและปลอดภัย ไม่เสียเวลาหยุดไลน์ในกระบวนการผลิต'
            ],
            [
                'icon' => asset('images/cosbog/icons/pressure-loss.png'),
                'title' => 'ลดการสูญเสียแรงดัน',
                'description' => 'พื้นผิดภายในของท่ออลูมิเนียมมีความเรียบ จึงช่วยลดแรง เสียดทาน ส่งผลให้การไหลของลมมีความสม่ำเสมอ และลดการสูญเสียแรงดันในระบบ'
            ],
            [
                'icon' => asset('images/cosbog/icons/longevity.png'),
                'title' => 'อายุการใช้งานยาวนาน',
                'description' => 'ด้วยคุณสมบัติที่ไม่เป็นสนิมและไม่เสื่อมสภาพง่าย ท่ออลูมิเนียมจึงสามารถใช้งานได้ยาวนานกว่าเมื่อเทียบกับท่อเหล็กในสภาวะแวดล้อมเดียวกัน '
            ],
            [
                'icon' => asset('images/cosbog/icons/high-pressure.png'),
                'title' => 'รองรับแรงดันสูง',
                'description' => 'ท่ออลูมิเนียมผลิตมาเพื่อใช้ในระบบลมอัดจึงสามารถทนแรงดันได้สูง และรักษาโครงสร้างได้ดีแม้ในสภาวะที่มีการใช้งานหนัก'
            ],
            [
                'icon' => asset('images/cosbog/icons/low-maintenance.png'),
                'title' => 'ค่าใช้จ่ายบำรุงรักษาต่ำ',
                'description' => 'เนื่องจากไม่เป็นสนิมและทนการกัดกร่อนสูง จึงลดภาระ ค่าใช้จ่ายด้านบำรุงรักษาจากการรั่วของท่อลม'
            ],
            [
                'icon' => asset('images/cosbog/icons/environment.png'),
                'title' => 'เป็นมิตรกับสิ่งแวดล้อม',
                'description' => 'อลูมิเนียมเป็นวัสดุที่นำมารีไซเคิลได้ง่ายและมีมูลค่า ทำให้เป็น ตัวเลือกที่ยั่งยืนกว่าท่อเหล็ก'
            ],
        ];

        return view('client.cosbog', compact('features'));
    }
}
