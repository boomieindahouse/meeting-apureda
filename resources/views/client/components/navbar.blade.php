<nav class="bg-white shadow-md py-3">
    <div class="container mx-auto px-6 flex justify-between items-center">
        <!-- โลโก้ -->
        <div class="flex items-center">
            <img src="{{ asset('images/navbar/logo.png') }}" alt="Logo" class="h-10">
        </div>

        <!-- เมนู -->
        <ul class="flex space-x-6 text-gray-600">
            <li><a href="#" class="hover:text-primary">หน้าแรก</a></li>
            <li><a href="#" class="hover:text-primary">ปั๊มลมและอุปกรณ์</a></li>
            <li><a href="#" class="hover:text-primary">ไส้กรองและอะไหล่</a></li>
            <li><a href="#" class="hover:text-primary">ท่ออลูมิเนียม</a></li>
            <li><a href="#" class="hover:text-primary">งานบริการ</a></li>
            <li><a href="#" class="hover:text-primary">เกี่ยวกับเรา</a></li>
            <li><a href="#" class="hover:text-primary">ข่าวสาร</a></li>
        </ul>

        <!-- หมายเลขโทรศัพท์ + QR Code -->
        <div class="flex items-center space-x-4">
            <div class="text-right">
                <div class="text-right flex items-center space-x-2">
                    <img src="{{ asset('images/navbar/tel.png') }}" alt="Phone Icon" class="h-5 w-5">
                    <p class="text-primary">0-2175-4350-52</p>
                </div>
                <p class="text-primary text-sm">Hotline: 086-551-1140</p>
            </div>
            <img src="{{ asset('images/navbar/qr-code.png') }}" alt="QR Code" class="h-12 border border-teal-600 rounded-md">
        </div>
    </div>
</nav>