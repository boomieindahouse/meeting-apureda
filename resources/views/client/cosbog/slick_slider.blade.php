<section class="py-10 text-center">
    <!-- <h2 class="section-title mb-6">Our Services</h2> -->
    <div class="container mx-auto">
        <div class="service-slider w-full"> <!-- เอา flex ออก -->
            @foreach ($services as $service)
            <div class="pr-2 py-2">
                <div class="bg-white shadow-sm overflow-hidden">
                    <img src="{{ asset('images/homepage/ourservice/' . $service->image) }}"
                        alt="{{ $service->title }}"
                        class="w-full h-60 object-cover">
                    <!-- <div class="p-4">
                        <h3 class="text-lg text-[#303030] font-normal">{{ $service->title }}</h3>
                    </div> -->
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<style>
    .service-slider {
        width: 100%;
        /* ให้เต็มความกว้าง */
        box-sizing: border-box;
        /* ให้รวม padding และ border เข้ากับขนาด */
    }

    .slick-slide {
        display: flex;
        /* ทำให้แต่ละ slide ใช้พื้นที่แนวนอนเต็มที่ */
        justify-content: center;
        /* ให้ slide อยู่ตรงกลาง */
    }

    .slick-track {
        display: flex;
        /* ทำให้ track ของ slick ใช้ความยาวเต็ม */
    }

    .container {
        width: 100%;
        /* ทำให้ container ครอบคลุมพื้นที่ทั้งหมด */
        padding: 0;
        /* กำจัด padding ที่อาจจะทำให้ไม่เต็ม */
        box-sizing: border-box;
    }

    /* เปลี่ยนสีของ bullet ทั้งหมด */
    .slick-dots li button:before {
        color: #D9D9D9;
        /* เปลี่ยนเป็นสีที่ต้องการ */
        font-size: 8px;
        /* ปรับขนาด */
        opacity: 0.5;
        /* ความโปร่งใส */
    }

    /* เปลี่ยนสีของ bullet ที่ active */
    .slick-dots li.slick-active button:before {
        color: #008C9E;
        /* เปลี่ยนสีของ bullet ที่เลือก */
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
    slidesToShow: 3,  // หรือ 1, 2 หรือค่าที่เหมาะสมกับความกว้าง
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