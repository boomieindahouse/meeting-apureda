@php
$images = [
'images/cosbog/ins/1.png',
'images/cosbog/ins/2.png',
'images/cosbog/ins/3.png',
'images/cosbog/ins/4.png',
'images/cosbog/ins/5.png',
'images/cosbog/ins/6.png',
'images/cosbog/ins/7.png',
];
@endphp

<div class="relative w-full overflow-hidden my-10">
    <!-- แถวบน (เลื่อนซ้ายไปขวา) -->
    <div class="slick-slider-top">
        @foreach ($images as $image)
        <div class="slick-slide px-2">
            <img src="{{ asset($image) }}" alt="Image" class="w-full h-auto rounded-lg shadow-md">
        </div>
        @endforeach
    </div>

    <!-- แถวล่าง (เลื่อนขวามาซ้าย) -->
    <div class="slick-slider-bot mt-4">
        @foreach ($images as $image)
        <div class="slick-slide px-2">
            <img src="{{ asset($image) }}" alt="Image" class="w-full h-auto rounded-lg shadow-md">
        </div>
        @endforeach
    </div>
</div>

<style>
    .slick-slider-top img {
        height: 300px;
        width: 100%;
        object-fit: cover;
    }
    .slick-slider-bot img {
        height: 300px;
        width: 100%;
        object-fit: cover;
    }
</style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

<script>
    $(document).ready(function() {
        $('.slick-slider-top').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1500,
            arrows: false,
            dots: false,
            rtl: false, // เลื่อนจากซ้ายไปขวา
        });
    });
    $('.slick-slider-bot').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            arrows: false,
            dots: false,
            rtl: false, // เลื่อนจากซ้ายไปขวา
        });
</script>