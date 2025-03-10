<nav class="bg-white shadow-md py-3 fixed top-0 left-0 w-full z-50 transition-all duration-300" x-data="{ open: false }">
    <div class="container mx-auto flex justify-between items-center px-4 md:px-8 lg:px-6">
        <!-- Logo -->
        <div class="flex items-center">
            <img src="{{ asset('images/navbar/logo.png') }}" alt="Logo" class="h-10">
        </div>

        <!-- Mobile Menu Button -->
        <button @click="open = !open" class="lg:hidden focus:outline-none ml-auto pr-6 relative w-10 h-10 flex items-center justify-center">
            <div class="relative w-6 h-6 transition-all duration-300 transform" :class="open ? 'rotate-90' : 'rotate-0'">
                <!-- Hamburger Icon -->
                <svg x-show="!open" class="w-6 h-6 absolute top-0 left-0 transition-opacity duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
                <!-- X Icon -->
                <svg x-show="open" class="w-6 h-6 absolute top-0 left-0 transition-opacity duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </div>
        </button>

        <!-- Desktop Menu Items -->
        <ul class="hidden lg:flex lg:space-x-6 xl:space-x-10 text-gray-600">
            <li><a href="/" class="nav-link hover:text-primary">หน้าแรก</a></li>
            <li><a href="/airpump" class="nav-link hover:text-primary">ปั๊มลมและอุปกรณ์</a></li>
            <li><a href="#" class="nav-link hover:text-primary">ไส้กรองและอะไหล่</a></li>
            <li><a href="/cosbog" class="nav-link hover:text-primary">ท่ออลูมิเนียม</a></li>
            <li><a href="/jelpc" class="nav-link hover:text-primary">งานบริการ</a></li>
            <li x-data="{ dropdownOpen: false }" @mouseenter="dropdownOpen = true" @mouseleave="dropdownOpen = false" class="relative">
                <a href="/about_us" class="nav-link hover:text-primary">เกี่ยวกับเรา</a>
                <div x-show="dropdownOpen" x-transition class="absolute top-full left-0 mt-2 bg-white shadow-lg rounded-lg w-40 py-2">
                    <a href="/contact" class="nav-link block px-4 py-2 text-gray-700 hover:bg-gray-100">ติดต่อเรา</a>
                </div>
            </li>
            <li><a href="/news" class="nav-link hover:text-primary">ข่าวสาร</a></li>
        </ul>
        <!-- Contact & QR Code -->
        <div class="flex items-center space-x-4">
            <div class="hidden lg:hidden xl:block text-right">
                <div class="text-right flex items-center space-x-2">
                    <img src="{{ asset('images/navbar/tel.png') }}" alt="Phone Icon" class="h-5 w-5">
                    <p class="text-primary">0-2175-4350-52</p>
                </div>
                <p class="text-primary text-sm">Hotline: 086-551-1140</p>
            </div>
            <img src="{{ asset('images/navbar/qr-code.png') }}" alt="QR Code" class="hidden sm:hidden lg:block h-14 border border-teal-600 rounded-md">
        </div>
    </div>

    <!-- Mobile Dropdown Menu -->
    <div x-show="open" @click.outside="open = false"
        x-transition:enter="transition ease-out duration-300 transform"
        x-transition:enter-start="-translate-y-full opacity-0"
        x-transition:enter-end="translate-y-0 opacity-100"
        x-transition:leave="transition ease-in duration-200 transform"
        x-transition:leave-start="translate-y-0 opacity-100"
        x-transition:leave-end="-translate-y-full opacity-0"
        class="fixed top-16 left-0 w-full bg-white shadow-md py-4 px-6 space-y-4 z-50">
        <a href="/" class="nav-link block text-gray-600 hover:text-primary">หน้าแรก</a>
        <a href="#" class="nav-link block text-gray-600 hover:text-primary">ปั๊มลมและอุปกรณ์</a>
        <a href="#" class="nav-link block text-gray-600 hover:text-primary">ไส้กรองและอะไหล่</a>
        <a href="/cosbog" class="nav-link block text-gray-600 hover:text-primary">ท่ออลูมิเนียม</a>
        <a href="/jelpc" class="nav-link block text-gray-600 hover:text-primary">งานบริการ</a>
        <a href="/about_us" class="nav-link block text-gray-600 hover:text-primary">เกี่ยวกับเรา</a>
        <a href="/contact" class="nav-link block text-gray-600 hover:text-primary">ติดต่อเรา</a>
        <a href="/news" class="nav-link block text-gray-600 hover:text-primary">ข่าวสาร</a>
    </div>
</nav>

<!-- ป้องกัน Navbar ทับเนื้อหาข้างล่าง -->
<style>
    body {
        padding-top: 70px;
        /* ป้องกันเนื้อหาถูก Navbar ทับ */
    }

    a.active {
        color: #008C9E !important;
    }

    /* Navbar Fixed Effect */
    nav.fixed {
        background-color: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(5px);
    }

    /* Mobile Menu Fix */
    .mobile-menu {
        position: fixed;
        top: 64px;
        left: 0;
        width: 100%;
        background: white;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        z-index: 50;
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const currentPath = window.location.pathname;
        const navLinks = document.querySelectorAll(".nav-link");

        navLinks.forEach(link => {
            if (link.getAttribute("href") === currentPath) {
                link.classList.add("active");
            }
        });
    });
</script>