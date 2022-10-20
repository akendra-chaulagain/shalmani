


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


       <div class="relative px-4 sm:px-0 md:-mt-10 z-10">
      <div class="absolute inset-0 h-1/2"></div>
      <div
        class="relative grid mx-auto overflow-hidden bg-white divide-y rounded shadow sm:max-w-screen-sm sm:grid-cols-3 lg:max-w-screen-md"
      >
        <div
          class="inline-block p-8 text-center hover:scale-110 transition-all transform ease-in-out duration-300 cursor-pointer bg-blue-600"
        >
          <div
            class="flex items-center justify-center w-12 h-12 mx-auto mb-4 rounded-full bg-blue-50"
          >
            <svg
              class="h-8 w-8 text-blue-400"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="1"
                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"
              />
            </svg>
          </div>
          <p class="font-bold tracking-wide text-white">Trusted</p>
        </div>
        <div
          class="inline-block p-8 text-center hover:scale-110 transform transition-all ease-in-out duration-300 cursor-pointer bg-blue-400"
        >
          <div
            class="flex items-center justify-center w-12 h-12 mx-auto mb-4 rounded-full bg-blue-50"
          >
            <svg
              class="h-8 w-8 text-blue-400"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="1"
                d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"
              />
            </svg>
          </div>
          <p class="font-bold tracking-wide text-white">Free Counselling</p>
        </div>
        <div
          class="inline-block p-8 text-center hover:scale-110 transition-all ease-in-out duration-300 cursor-pointer"
        >
          <div
            class="flex items-center justify-center w-12 h-12 mx-auto mb-4 rounded-full bg-blue-50"
          >
            <svg
              class="h-8 w-8 text-blue-400"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="1"
                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"
              />
            </svg>
          </div>
          <p class="font-bold tracking-wide text-gray-800">Support</p>
        </div>
      </div>
    </div>