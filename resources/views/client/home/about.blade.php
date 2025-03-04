<section class="about-section bg-cover bg-center py-20"
    style="background-image: url('images/homepage/about/layerbg.png');">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
        <!-- เนื้อหาด้านซ้าย -->
        <div class="flex flex-col items-start">
            <p class="text-gray-700 mt-4 leading-relaxed text-start font-light">
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

            <button class="bg-primary rounded-3xl px-6 py-2 mt-6 mx-auto text-white hover:bg-white hover:border hover:border-teal-600 hover:text-primary duration-300">
                <a href="#">อ่านเพิ่มเติม</a>
            </button>
        </div>



        <!-- รูปภาพด้านขวา -->
        <div class="relative w-[500px] ml-auto origin-top-right">
            <!-- รูปใหญ่ -->
            <img src="{{ asset('images/homepage/about/img1.png') }}"
                class="rounded-lg shadow-lg w-full max-w-md mx-auto scale-110">

            <!-- รูปเล็ก -->
            <img src="{{ asset('images/homepage/about/img2.png') }}"
                class="absolute -bottom-8 -right-3 w-[250px] rounded-2xl shadow-lg border-white border-3 scale-110">
        </div>


    </div>
</section>