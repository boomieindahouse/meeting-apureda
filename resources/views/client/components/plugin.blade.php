<div x-data="{ open: false }" class="fixed right-4 bottom-4 flex flex-col items-center z-50">
    <!-- คลิกที่ไหนก็ได้เพื่อปิด -->
    <div x-show="open" x-transition.duration.300ms @click.away="open = false"
        class="flex flex-col-reverse items-center space-y-reverse space-y-3 mb-3">

        <a href="mailto:sales@apdthailand.com"
            class="bg-[#008C9E] text-white w-12 h-12 flex items-center justify-center rounded-full shadow-lg hover:bg-gray-600 transition duration-300">
            <i class="fas fa-envelope"></i>
        </a>
        <a href="https://www.youtube.com/" target="_blank"
            class="bg-[#008C9E] text-white w-12 h-12 flex items-center justify-center rounded-full shadow-lg hover:bg-gray-600 transition duration-300">
            <i class="fab fa-youtube"></i>
        </a>
        <a href="https://www.instagram.com/" target="_blank"
            class="bg-[#008C9E] text-white w-12 h-12 flex items-center justify-center rounded-full shadow-lg hover:bg-gray-600 transition duration-300">
            <i class="fab fa-instagram"></i>
        </a>
        <a href="https://m.me/yourpage" target="_blank"
            class="bg-[#008C9E] text-white w-12 h-12 flex items-center justify-center rounded-full shadow-lg hover:bg-gray-600 transition duration-300">
            <i class="fab fa-facebook-messenger"></i>
        </a>
        <a href="https://www.facebook.com/" target="_blank"
            class="bg-[#008C9E] text-white w-12 h-12 flex items-center justify-center rounded-full shadow-lg hover:bg-gray-600 transition duration-300">
            <i class="fab fa-facebook-f"></i>
        </a>
        <a href="tel:0865511140" target="_blank"
            class="bg-[#008C9E] text-white w-12 h-12 flex items-center justify-center rounded-full shadow-lg hover:bg-gray-600 transition duration-300">
            <i class="fas fa-phone-alt"></i>
        </a>
    </div>

    <!-- ปุ่มหลัก (อยู่ที่เดิม) -->
    <button @click="open = !open"
        class="bg-[#008C9E] text-white w-14 h-14 flex items-center justify-center rounded-full shadow-lg hover:bg-gray-600 transition duration-300">
        <i class="fas fa-comment-dots text-2xl"></i>
    </button>
</div>
