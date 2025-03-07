<section class="relative flex flex-col md:flex-row items-center bg-[#005F6B] text-white w-full h-[300px] md:h-[400px]">
    <!-- ด้านซ้าย: ข้อความ + รูป -->
    <div class="relative w-full md:w-1/2 h-full flex items-center px-10 md:px-20">
        <!-- รูปพื้นหลัง -->
        <div class="absolute inset-0">
            <img src="{{ asset('images/cosbog/banner/banner2.png') }}"
                class="w-full h-full object-cover opacity-60">
        </div>

        <!-- Overlay สีไล่ระดับ -->
        <div class="absolute inset-0 bg-[#ED1C24] opacity-40"></div>

        <!-- ข้อความ -->
        <div class="relative z-10">
            <h2 class="text-2xl md:text-4xl font-bold flex items-center gap-2">
                บริการฉับไว
            </h2>
            <!-- <p class="text-xl md:text-3xl font-semibold mt-2">
                ท่อลมอลูมิเนียมรับประกันไม่รั่วยาวนาน 10 ปี
            </p> -->
            <p class="text-lg font-normal md:text-xl mt-2 md:mt-4 w-4/5">
                เพราะปั๊มลมเป็นสิ่งสำคัญอันดับต้น ๆ ของโรงงาน เราจึงมุ่งเน้นงานบริการที่ฉับไว
                และรวดเร็วในการแก้ไขปัญหา ในกรณีเร่งด่วนเราสามารถเข้าบริการลูกค้าได้ภายใน
                4-12 ชั่วโมง หลังจากได้รับแจ้งปัญหา
            </p>
        </div>
    </div>

    <!-- ด้านขวา: รูปภาพ -->
    <div class="relative w-full md:w-1/2 h-full flex items-center px-10 md:px-20">
        <!-- รูปพื้นหลัง -->
        <div class="absolute inset-0">
            <img src="{{ asset('images/cosbog/banner/banner2.png') }}"
                class="w-full h-full object-cover opacity-60">
        </div>

        <!-- Overlay สีไล่ระดับ -->
        <div class="absolute inset-0 bg-[#6D6E71] opacity-70"></div>

        <!-- ข้อความ -->
        <div class="relative z-10">
            <h2 class="text-2xl md:text-4xl font-bold flex items-center gap-2">
                ใส่ใจทุกขั้นตอน
            </h2>
            <!-- <p class="text-xl md:text-3xl font-semibold mt-2">
                ท่อลมอลูมิเนียมรับประกันไม่รั่วยาวนาน 10 ปี
            </p> -->
            <p class="text-lg md:text-xl mt-2 md:mt-4 w-4/5">
                ช่างบริการของเราได้รับการฝึกฝนทักษะทั้งด้านทฤษฎีและปฏิบัติทุกขั้นตอน
                มีการตรวจสอบความถูกต้องอย่างเคร่งครัด พร้อมติดตามการแก้ไขปัญหา
                เพื่อให้งานสำเร็จลุล่วงเรียบร้อย และเป็นไปตามมาตรฐานความปลอดภัย 
            </p>
        </div>
    </div>
</section>
<div class="w-full flex justify-center my-6">
    <button class="bg-[#303030] rounded-3xl px-6 py-2 border text-white hover:bg-white hover:border hover:border-red-500/60 hover:text-[#ED1C24] duration-300">
        <a href="#">ติดต่อขอรับคำปรึกษา</a>
    </button>
</div>