<section class="relative flex flex-col md:flex-row items-center bg-[#005F6B] text-white w-full h-[300px] md:h-[400px]">
    <!-- ด้านซ้าย: ข้อความ + รูป -->
    <div class="relative w-full md:w-1/2 h-full flex items-center px-10 md:px-20">
        <!-- รูปพื้นหลัง -->
        <div class="absolute inset-0">
            <img src="{{ asset('images/cosbog/banner/banner2.png') }}"
                class="w-full h-full object-cover opacity-60">
        </div>

        <!-- Overlay สีไล่ระดับ -->
        <div class="absolute inset-0 bg-[#005F6B] opacity-60"></div>

        <!-- ข้อความ -->
        <div class="relative z-10">
            <h2 class="text-2xl md:text-4xl font-bold flex items-center gap-2">
                ท่อลมอลูมิเนียม
                <img src="images/cosbog/banner/cosbog.png" alt="CosBog®" class="h-8 md:h-8">
            </h2>
            <p class="text-xl md:text-3xl font-semibold mt-2">
                ท่อลมอลูมิเนียมรับประกันไม่รั่วยาวนาน 10 ปี
            </p>
            <p class="text-lg md:text-xl mt-2 md:mt-4">
                ท่ออลูมิเนียมคุณภาพสูง CosBog ผลิตจากอลูมิเนียมอัลลอย <br> ติดตั้งง่าย รับประกันสินค้า 10 ปี
                พร้อมทีมวิศวกรและทีมงานมืออาชีพ
            </p>
        </div>
    </div>

    <!-- ด้านขวา: รูปภาพ -->
    <div class="relative w-full md:w-1/2 h-full">
        <img src="images/cosbog/banner/banner.png" alt="ท่อลมอลูมิเนียม CosBog"
            class="w-full h-full object-cover">
    </div>
</section>