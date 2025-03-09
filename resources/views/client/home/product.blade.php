<!-- Slick Slider Styles -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick-theme.css" />

<section class="hidden md:grid grid-cols-3 ">
    <!-- Desktop View (Grid Layout) -->
    <div class="relative bg-gray-100 shadow-lg overflow-hidden h-[900px] group">
        <img src="{{ asset('images/homepage/product/productbg1.png') }}" class="w-full h-[900px] object-cover opacity-20 group-hover:opacity-100 transition duration-500">

        <a href="#">
            <img src="{{ asset('images/homepage/product/prod1.png') }}" class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-auto h-[350px] object-cover">
        </a>

        <div class="absolute bottom-0 bg-gradient-to-t from-black to-transparent w-full p-10 text-white">
            <h3 class="text-2xl font-semibold">ปั๊มลมและอุปกรณ์</h3>
            <a href="#" class="inline-block bg-primary mt-2 text-white rounded-full px-3 py-2 border border-transparent hover:border hover:border-white hover:bg-transparent duration-300">→</a>
        </div>
    </div>

    <div class="relative bg-gray-100 shadow-lg overflow-hidden h-[900px] group">
        <img src="{{ asset('images/homepage/product/productbg1.png') }}" class="w-full h-[900px] object-cover opacity-20 group-hover:opacity-100 transition duration-500">

        <a href="#">
            <img src="{{ asset('images/homepage/product/prod2.png') }}" class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-auto h-[500px] object-cover">
        </a>

        <div class="absolute bottom-0 bg-gradient-to-t from-black to-transparent w-full p-10 text-white">
            <h3 class="text-2xl font-semibold">ไส้กรองและอะไหล่</h3>
            <a href="#" class="inline-block bg-primary mt-2 text-white rounded-full px-3 py-2 border border-transparent hover:border hover:border-white hover:bg-transparent duration-300">→</a>
        </div>
    </div>

    <div class="relative bg-gray-100 shadow-lg overflow-hidden h-[900px] group">
        <img src="{{ asset('images/homepage/product/productbg1.png') }}" class="w-full h-[900px] object-cover opacity-20 group-hover:opacity-100 transition duration-500">

        <a href="#">
            <img src="{{ asset('images/homepage/product/prod3.png') }}" class="absolute top-[45%] left-[55%] transform -translate-x-1/2 -translate-y-1/2 w-auto h-auto object-cover">
        </a>

        <div class="absolute bottom-0 bg-gradient-to-t from-black to-transparent w-full p-10 text-white">
            <h3 class="text-2xl font-semibold">ท่ออลูมิเนียม</h3>
            <a href="#" class="inline-block bg-primary mt-2 text-white rounded-full px-3 py-2 border border-transparent hover:border hover:border-white hover:bg-transparent duration-300">→</a>
        </div>
    </div>
</section>

<!-- Mobile View (Slick Slider) -->
<section class="block md:hidden">
    <div class="product-slider">
        <div class="relative bg-gray-100 shadow-lg overflow-hidden h-[600px] group">
            <img src="{{ asset('images/homepage/product/productbg1.png') }}" class="w-full h-[600px] object-cover opacity-20 group-hover:opacity-100 transition duration-500">

            <a href="#">
                <img src="{{ asset('images/homepage/product/prod1.png') }}" class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-auto h-[250px] object-cover">
            </a>

            <div class="absolute bottom-0 bg-gradient-to-t from-black to-transparent w-full p-6 text-white">
                <h3 class="text-xl font-semibold">ปั๊มลมและอุปกรณ์</h3>
                <a href="#" class="inline-block bg-primary mt-2 text-white rounded-full px-3 py-2 border border-transparent hover:border hover:border-white hover:bg-transparent duration-300">→</a>
            </div>
        </div>

        <div class="relative bg-gray-100 shadow-lg overflow-hidden h-[600px] group">
            <img src="{{ asset('images/homepage/product/productbg1.png') }}" class="w-full h-[600px] object-cover opacity-20 group-hover:opacity-100 transition duration-500">

            <a href="#">
                <img src="{{ asset('images/homepage/product/prod2.png') }}" class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-auto h-[350px] object-cover">
            </a>

            <div class="absolute bottom-0 bg-gradient-to-t from-black to-transparent w-full p-6 text-white">
                <h3 class="text-xl font-semibold">ไส้กรองและอะไหล่</h3>
                <a href="#" class="inline-block bg-primary mt-2 text-white rounded-full px-3 py-2 border border-transparent hover:border hover:border-white hover:bg-transparent duration-300">→</a>
            </div>
        </div>

        <div class="relative bg-gray-100 shadow-lg overflow-hidden h-[600px] group">
            <img src="{{ asset('images/homepage/product/productbg1.png') }}" class="w-full h-[600px] object-cover opacity-20 group-hover:opacity-100 transition duration-500">

            <a href="#">
                <img src="{{ asset('images/homepage/product/prod3.png') }}" class="absolute top-[45%] left-[55%] transform -translate-x-1/2 -translate-y-1/2 w-auto h-auto object-cover">
            </a>

            <div class="absolute bottom-0 bg-gradient-to-t from-black to-transparent w-full p-6 text-white">
                <h3 class="text-xl font-semibold">ท่ออลูมิเนียม</h3>
                <a href="#" class="inline-block bg-primary mt-2 text-white rounded-full px-3 py-2 border border-transparent hover:border hover:border-white hover:bg-transparent duration-300">→</a>
            </div>
        </div>
    </div>
</section>

<!-- ปุ่มอ่านเพิ่มเติม -->
<div class="w-full flex justify-center my-6">
    <button class="bg-primary rounded-3xl px-6 py-2 text-white border hover:bg-white hover:border hover:border-teal-600 hover:text-primary duration-300">
        <a href="#">ทั้งหมด</a>
    </button>
</div>

<!-- jQuery & Slick -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.min.js"></script>

<!-- Initialize Slick -->
<script>
    $(document).ready(function(){
        $('.product-slider').slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            adaptiveHeight: true,
            autoplay: true,
            autoplaySpeed: 3000,
            arrows: false
        });
    });
</script>
