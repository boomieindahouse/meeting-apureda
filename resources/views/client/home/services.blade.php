<section class="py-10 text-center">
    <h2 class="section-title mb-6">Our Services</h2>
    <div class="container mx-auto"> 
        <div class="service-slider w-full"> 
            @foreach ($services as $service)
            <div class="px-2">
                <div class="bg-white shadow-sm rounded-lg overflow-hidden">
                    <img src="{{ asset('images/homepage/ourservice/' . $service->image) }}" 
                         alt="{{ $service->title }}" 
                         class="w-full h-60 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg text-[#303030] font-normal">{{ $service->title }}</h3>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<style>
    /* ป้องกัน Overflow จาก Slick */
    .container {
        max-width: 100%;
        overflow-x: hidden;
    }

    .service-slider {
        box-sizing: border-box;
    }

    /* ป้องกันล้นในมือถือ */
    .slick-track {
        display: flex;
    }

    /* ปรับขนาด bullet ของ Slick */
    .slick-dots li button:before {
        color: #303030;
        font-size: 8px;
        opacity: 0.5;
    }

    .slick-dots li.slick-active button:before {
        color: #008C9E;
        opacity: 1;
    }
</style>

<!-- Import jQuery และ Slick -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

<!-- เรียกใช้งาน Slick -->
<script>
    $(document).ready(function() {
        $('.service-slider').slick({
            dots: true,
            infinite: true,
            speed: 500,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1
                    }
                }
            ]
        });
    });
</script>
