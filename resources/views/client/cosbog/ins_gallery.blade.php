<!-- resources/views/components/installation-gallery.blade.php -->
<section class="py-12 bg-white">
    <div class="container mx-auto px-4">
        <div class="installation-gallery">
            <!-- First row of images (larger) -->
            <div class="mb-4">
                <div class="slick-row-1 flex overflow-hidden">
                    <div class="px-2">
                        <img src="{{ asset('images/cosbog/ins/1.png') }}" alt="Installation Example" class="w-full h-64 object-cover rounded-lg">
                    </div>
                    <div class="px-2">
                        <img src="{{ asset('images/cosbog/ins/2.png') }}" alt="Installation Example" class="w-full h-64 object-cover rounded-lg">
                    </div>
                    <div class="px-2">
                        <img src="{{ asset('images/cosbog/ins/3.png') }}" alt="Installation Example" class="w-full h-64 object-cover rounded-lg">
                    </div>
                </div>
            </div>

            <!-- Second row of images (smaller) -->
            <div>
            <div class="slick-row-2 flex overflow-hidden">
                    <div class="px-2">
                        <img src="{{ asset('images/cosbog/ins/4.png') }}" alt="Installation Detail" class="w-full h-48 object-cover rounded-lg">
                    </div>
                    <div class="px-2">
                        <img src="{{ asset('images/cosbog/ins/5.png') }}" alt="Installation Detail" class="w-full h-48 object-cover rounded-lg">
                    </div>
                    <div class="px-2">
                        <img src="{{ asset('images/cosbog/ins/6.png') }}" alt="Installation Detail" class="w-full h-48 object-cover rounded-lg">
                    </div>
                    <div class="px-2">
                        <img src="{{ asset('images/cosbog/ins/7.png') }}" alt="Installation Detail" class="w-full h-48 object-cover rounded-lg">
                    </div>
                </div>
            </div>

            <!-- Dots indicator -->
            <div class="flex justify-center mt-6 space-x-2">
                <button class="carousel-dot active h-3 w-3 rounded-full bg-teal-500"></button>
                <button class="carousel-dot h-3 w-3 rounded-full bg-gray-300"></button>
                <button class="carousel-dot h-3 w-3 rounded-full bg-gray-300"></button>
                <button class="carousel-dot h-3 w-3 rounded-full bg-gray-300"></button>
            </div>
        </div>
    </div>
</section>

<!-- Add this to your layout or view where you want to include Slick Carousel -->
@push('styles')
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
<style>
    .slick-prev:before,
    .slick-next:before {
        color: #0D9488;
        /* Tailwind teal-600 */
    }

    .carousel-dot.active {
        background-color: #0D9488;
        /* Tailwind teal-600 */
    }

    .carousel-dot {
        transition: background-color 0.3s ease;
    }

    .slick-row-1, .slick-row-2 {
    width: 100%;
}

.slick-slide img {
    width: 100%;
    height: auto;
    object-fit: cover;
    border-radius: 8px;
}

</style>
@endpush

@push('scripts')
<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
    $(document).ready(function() {
        $('.slick-row-1').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: true,
            dots: false,
            autoplay: true,
            autoplaySpeed: 3000,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 640,
                    settings: {
                        slidesToShow: 1
                    }
                }
            ]
        });

        $('.slick-row-2').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            arrows: true,
            dots: false,
            autoplay: true,
            autoplaySpeed: 2500,
            responsive: [{
                    breakpoint: 1280,
                    settings: {
                        slidesToShow: 4
                    }
                },
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 640,
                    settings: {
                        slidesToShow: 1
                    }
                }
            ]
        });

        // Manual dot navigation
        $('.carousel-dot').on('click', function() {
            const index = $(this).index();
            $('.slick-row-1').slick('slickGoTo', index);
            $('.slick-row-2').slick('slickGoTo', index * 2); // adjust based on your preference

            $('.carousel-dot').removeClass('active bg-teal-500').addClass('bg-gray-300');
            $(this).addClass('active bg-teal-500').removeClass('bg-gray-300');
        });

        // Update dots on slide change
        $('.slick-row-1').on('afterChange', function(event, slick, currentSlide) {
            const slideCount = Math.ceil(slick.slideCount / slick.options.slidesToScroll);
            const activeDot = Math.min(Math.floor(currentSlide / slick.options.slidesToScroll), slideCount - 1);

            $('.carousel-dot').removeClass('active bg-teal-500').addClass('bg-gray-300');
            $('.carousel-dot').eq(activeDot).addClass('active bg-teal-500').removeClass('bg-gray-300');
        });
    });
</script>
@endpush