<section class="py-10 text-center">
    <h2 class="section-title mb-6">Our Services</h2>
    <div class="container mx-auto">
        <div class="service-slider w-full"> <!-- เอา flex ออก -->
            @foreach ($services as $service)
            <div class="px-4 py-2">
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
    /* เปลี่ยนสีของ bullet ทั้งหมด */
.slick-dots li button:before {
    color: #ff6600; /* เปลี่ยนเป็นสีที่ต้องการ */
    font-size: 8px; /* ปรับขนาด */
    opacity: 0.5; /* ความโปร่งใส */
}

/* เปลี่ยนสีของ bullet ที่ active */
.slick-dots li.slick-active button:before {
    color: #008C9E; /* เปลี่ยนสีของ bullet ที่เลือก */
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
    });
</script>
