@php
    $images = [
        'images/jelpc/jelpcservice/1.png',
        'images/jelpc/jelpcservice/2.png',
        'images/jelpc/jelpcservice/3.png',
        'images/jelpc/jelpcservice/4.png',
        'images/jelpc/jelpcservice/5.png',
        'images/jelpc/jelpcservice/6.png',
    ];
@endphp

<div class="relative w-full overflow-hidden pb-6">
    <!-- แถวบน (เลื่อนซ้ายไปขวา) -->
    <div class="slick-slider">
        @foreach ($images as $image)
            <div class="px-2">
                <img src="{{ asset($image) }}" alt="Image" class="w-full h-auto rounded-lg shadow-md">
            </div>
        @endforeach
    </div>
</div>

<style>
    .slick-slider img {
        height: 300px;
        width: 100%;
        object-fit: cover;
    }
</style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

<script>
    $(document).ready(function () {
    $('.slick-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1200,
        arrows: false,
        dots: false,
        rtl: false, // เลื่อนจากซ้ายไปขวา
    });
});
</script>
