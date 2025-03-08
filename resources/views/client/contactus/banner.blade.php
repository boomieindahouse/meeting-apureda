<section class="relative flex flex-col md:flex-row items-center justify-center bg-[#005F6B] text-white w-full h-[300px] md:h-[400px]">
    <!-- ด้านซ้าย: ข้อความ + รูป -->
    <div class="relative w-full md:w-full h-full flex items-center justify-center px-10 md:px-20">
        <!-- รูปพื้นหลัง -->
        <div class="absolute inset-0">
            <img src="{{ asset('images/aboutus/banner.png') }}" class="w-full h-full object-cover opacity-60">
        </div>

        <!-- Overlay สีไล่ระดับ -->
        <div class="absolute inset-0 bg-[#005F6B] opacity-40"></div>

        <!-- ข้อความ -->
        <div class="relative z-10 text-center">
            <h2 class="text-2xl md:text-5xl font-bold flex justify-center items-center gap-2">
                Contact us
            </h2>
        </div>
    </div>
</section>
