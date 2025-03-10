<section class="about-section bg-cover bg-center py-20"
    style="background-image: url('images/homepage/about/layerbg.png');">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 items-center">

        <!-- รูปภาพ (อยู่ด้านบนใน Mobile, อยู่ด้านขวาใน Desktop) -->
        <div class="relative w-full flex justify-center md:order-2">
            <!-- รูปใหญ่ -->
            <img src="{{ asset('images/homepage/about/img1.png') }}"
                class="rounded-lg shadow-lg w-[90%] sm:w-[80%] md:w-[70%] w-[300px] lg:w-[500px] max-w-md mx-auto origin-top-right scale-100">

            <!-- รูปเล็ก -->
            <img src="{{ asset('images/homepage/about/img2.png') }}"
                class="absolute -bottom-8 sm:-bottom-10 md:-bottom-12 right-5 sm:right-20 md:right-5 w-[150px] sm:w-[180px] md:w-[200px] lg:w-[250px] rounded-2xl shadow-lg border-white border-3">
        </div>

        <!-- เนื้อหา (อยู่ด้านล่างใน Mobile, อยู่ด้านซ้ายใน Desktop) -->
        <div class="flex flex-col items-start text-start md:text-start md:order-1 px-6 pt-6 lg:pt-0">
            <p class="text-gray-700 mt-4 leading-relaxed font-light text-center lg:text-start">
                การฝึกอบรมและพัฒนาบุคลากรเป็นสิ่งที่เราให้ความสำคัญ เพื่อส่งเสริมทักษะความรู้ และมาตรฐานการบริการลูกค้าแบบมืออาชีพ มีขอบข่ายหน้าที่ความรับผิดชอบ และประสานงานอย่างเป็นระบบและมีประสิทธิภาพ
            </p>
            <ul class="mt-4 space-y-6">
                <li class="flex items-start">
                    <img src="{{ asset('images/homepage/about/checkicon.png') }}" class="w-5 h-5 mr-2">
                    <p class="font-light text-gray-700">ทีมวิศวกรและช่างบริการที่มีทักษะ ประสบการณ์ และความเชี่ยวชาญสูง</p>
                </li>
                <li class="flex items-start">
                    <img src="{{ asset('images/homepage/about/checkicon.png') }}" class="w-5 h-5 mr-2">
                    <p class="font-light text-gray-700">ฝ่ายขายที่มีความรู้ความเข้าใจเกี่ยวกับมาตรฐานคุณภาพลมอัด สามารถให้คำแนะนำ ด้านสินค้าและบริการที่เหมาะสมให้กับลูกค้าแต่ละราย</p>
                </li>
            </ul>

            <!-- ปรับปุ่มให้อยู่ตรงกลาง -->
            <div class="w-full flex justify-center mt-6">
                <button class="bg-primary rounded-3xl px-6 py-2 text-white hover:bg-white hover:border hover:border-teal-600 hover:text-primary duration-300">
                    <a href="#">อ่านเพิ่มเติม</a>
                </button>
            </div>
        </div>

    </div>
</section>