<nav class="bg-white shadow-md py-3" x-data="{ open: false }">
    <div class="container mx-auto flex justify-between items-center px-4 md:px-8 lg:px-12">
        <!-- Logo -->
        <div class="flex items-center">
            <img src="{{ asset('images/navbar/logo.png') }}" alt="Logo" class="h-10">
        </div>

        <!-- Mobile Menu Button (Visible from sm to md) -->
        <button @click="open = !open" class="sm:block md:block lg:hidden focus:outline-none ml-auto pr-6">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>

        <!-- Menu Items (Hidden on sm to md) -->
        <ul class="hidden lg:flex lg:space-x-6 xl:space-x-10 text-gray-600">
            <li><a href="/" class="hover:text-primary">หน้าแรก</a></li>
            <li><a href="#" class="hover:text-primary">ปั๊มลมและอุปกรณ์</a></li>
            <li><a href="#" class="hover:text-primary">ไส้กรองและอะไหล่</a></li>
            <li><a href="/cosbog" class="hover:text-primary">ท่ออลูมิเนียม</a></li>
            <li><a href="/jelpc" class="hover:text-primary">งานบริการ</a></li>
            <li x-data="{ dropdownOpen: false }" @mouseenter="dropdownOpen = true" @mouseleave="dropdownOpen = false" class="relative">
                <a href="/about_us" class="hover:text-primary">เกี่ยวกับเรา</a>
                <div x-show="dropdownOpen" x-transition class="absolute top-full left-0 mt-2 bg-white shadow-lg rounded-lg w-40 py-2">
                    <a href="/contact" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">ติดต่อเรา</a>
                </div>
            </li>
            <li><a href="/news" class="hover:text-primary">ข่าวสาร</a></li>
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
    <div x-show="open" class="sm:block md:block lg:hidden bg-white shadow-md py-4 px-6 space-y-4">
        <a href="/" class="block text-gray-600 hover:text-primary">หน้าแรก</a>
        <a href="#" class="block text-gray-600 hover:text-primary">ปั๊มลมและอุปกรณ์</a>
        <a href="#" class="block text-gray-600 hover:text-primary">ไส้กรองและอะไหล่</a>
        <a href="/cosbog" class="block text-gray-600 hover:text-primary">ท่ออลูมิเนียม</a>
        <a href="/jelpc" class="block text-gray-600 hover:text-primary">งานบริการ</a>
        <a href="/about_us" class="block text-gray-600 hover:text-primary">เกี่ยวกับเรา</a>
        <a href="/contact" class="block text-gray-600 hover:text-primary">ติดต่อเรา</a>
        <a href="/news" class="block text-gray-600 hover:text-primary">ข่าวสาร</a>
    </div>
</nav>




<style>
    /* Active Nav */
    a.active {
        color: #008C9E !important;
    }

    /* Navbar transition */
    nav {
        transition: all 0.3s ease-in-out;
    }

    nav.fixed {
        background-color: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(5px);
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const menuLinks = document.querySelectorAll('nav ul li a');
        const currentPath = window.location.pathname;
        const navbar = document.querySelector('nav');
        const navbarClone = navbar.cloneNode(true);

        // Add classes and styling to the clone
        navbarClone.classList.add('fixed-nav', 'w-full', 'fixed', 'top-0', 'left-0', 'right-0', 'z-50', 'shadow-lg', 'transform', '-translate-y-full');
        document.body.appendChild(navbarClone);

        // Set active menu item in both navbars
        menuLinks.forEach(link => {
            if (link.getAttribute('href') === currentPath) {
                link.classList.add('active');
            }
        });

        // Set active menu items in the clone
        const cloneLinks = navbarClone.querySelectorAll('ul li a');
        cloneLinks.forEach(link => {
            if (link.getAttribute('href') === currentPath) {
                link.classList.add('active');
            }
        });
        
        // Add scroll event listener
    window.addEventListener('scroll', function() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        
        if (scrollTop > 400) {
            // Push down the fixed navbar
            navbarClone.classList.remove('-translate-y-full');
            navbarClone.classList.add('translate-y-0');
        } else {
            // Push up the fixed navbar
            navbarClone.classList.remove('translate-y-0');
            navbarClone.classList.add('-translate-y-full');
        }
    });

    });
</script>