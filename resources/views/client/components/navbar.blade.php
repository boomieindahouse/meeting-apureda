<nav class="bg-white shadow-md py-3">
    <div class="container mx-auto flex justify-between items-center">
        <!-- โลโก้ -->
        <div class="flex items-center">
            <img src="{{ asset('images/navbar/logo.png') }}" alt="Logo" class="h-10">
        </div>

        <!-- เมนู -->
        <ul class="flex space-x-10 text-gray-600">
            <li><a href="/" class="hover:text-primary">หน้าแรก</a></li>
            <li><a href="#" class="hover:text-primary">ปั๊มลมและอุปกรณ์</a></li>
            <li><a href="#" class="hover:text-primary">ไส้กรองและอะไหล่</a></li>
            <li><a href="/cosbog" class="hover:text-primary">ท่ออลูมิเนียม</a></li>
            <li><a href="/jelpc" class="hover:text-primary">งานบริการ</a></li>

            <!-- Dropdown เกี่ยวกับเรา -->
            <li x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false" class="relative z-50">
                <a href="/about_us" class="hover:text-primary" id="about-link">เกี่ยวกับเรา</a>

                <!-- Dropdown Menu -->
                <div x-show="open" x-transition 
                    class="absolute top-full left-2/2 transform -translate-x-1/2 mt-2 bg-white shadow-lg rounded-lg w-40 py-2 dropdown-menu">
                    <a href="/contact" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">ติดต่อเรา</a>
                </div>
            </li>

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