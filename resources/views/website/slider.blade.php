


    <section class="swiper mySwiper w-full h-px">
        <div class="swiper-wrapper">

            @foreach ($sliders as $slider)
                <div class="swiper-slide bg-no-repeat bg-center object-cover w-full"
                    style="background-image: url({{ $slider->banner_image }})">
                    <div class="flex flex-col mb-16 sm:text-center sm:mb-0">
                        <div class="w-full max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
                            <h2
                                class="max-w-lg mb-6 font-sans text-3xl font-extrabold leading-none tracking-tight text-white sm:text-5xl md:mx-auto">
                                <span class="relative inline-block">
                                    <span class="relative uppercase animate__fadeInUp">{{ $slider->caption }}
                            </h2>
                            <p style="color: #fff">
                               {!! $slider->short_content !!}
                            </p>
                        </div>
                        
                    </div>
                </div>
            @endforeach




        </div>
        <div class="swiper-button-next py-7 px-7 bg-white rounded-full"></div>
        <div class="swiper-button-prev py-7 px-7 bg-white rounded-full"></div>
        <div class="swiper-pagination"></div>
    </section>
