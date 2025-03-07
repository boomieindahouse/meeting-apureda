<section class="about-section bg-cover bg-center py-20"
    style="background-image: url('images/homepage/about/layerbg.png');">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
        <!-- เนื้อหาด้านซ้าย -->
        <div class="flex flex-col items-start">
            <p class="text-gray-700 mt-4 leading-relaxed text-xl text-start font-light">
                นอกจากสินค้าที่มีคุณภาพ หลากหลาย และครอบคลุมทุกความต้องการของลูกค้าแล้ว
                เรายังมีความชำนาญในด้านงานบริการโดยทีมวิศวกรและทีมช่างที่มีความเชี่ยวชาญเฉพาะด้าน
                สามารถวิเคราะห์แก้ไขปัญหางานซ่อมของลูกค้าได้อย่างตรงจุด รวดเร็วและมีประสิทธิภาพ
            </p>
        </div>



        <!-- รูปภาพด้านขวา -->
        <div class="relative w-[500px] ml-auto mb-10">
            <!-- รูปใหญ่ -->
            <img src="{{ asset('images/aboutus/sub1.png') }}"
                class="rounded-lg shadow-lg w-full max-w-md mx-auto origin-top-right scale-110">

            <!-- รูปเล็ก -->
            <img src="{{ asset('images/aboutus/sub2.png') }}"
                class="absolute -bottom-12 -right-3 w-[250px] rounded-2xl shadow-lg border-white border-3 origin-top-right scale-110">
        </div>


    </div>
</section>