 @extends('layouts.master')

 @push('title')
     {{ $normal->caption }}
 @endpush

 @section('content')
     <section>
         <div class="relative bg-gray-600 bg-no-repeat bg-center bg-cover bg-blend-overlay"
             style="
          background-image: url('https://images.pexels.com/photos/37646/new-york-skyline-new-york-city-city-37646.jpeg?cs=srgb&dl=pexels-pixabay-37646.jpg&fm=jpg');
        ">
             <div class="absolute inset-0">
                 <div class="absolute inset-0 bg-black-900" aria-hidden="true"></div>
             </div>
             <div class="relative max-w-7xl mx-auto py-28 px-4 sm:py-28 sm:px-6 lg:px-8">
                 <h1 class="text-3xl font-extrabold tracking-tight text-white sm:text-3xl lg:text-4xl">
                     {{ $normal->caption }}
                 </h1>
             </div>
         </div>
     </section>



     <section class="pt-20 lg:pt-[30px] pb-12 lg:pb-[40px] overflow-hidden">
         <div class="container px-4 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">

             <div class="flex flex-wrap justify-between items-center -mx-4">

                 @if ($normal->banner_image && $normal->icon_image && $normal->featured_image)
                     <div class="w-full lg:w-6/12 px-4">
                         <div class="flex items-center -mx-3 sm:-mx-4">
                             <div class="w-full xl:w-1/2 px-3 sm:px-4">
                                 <div class="py-3 sm:py-4">
                                     <img src="{{ $normal->banner_image }}" alt="" class="rounded-2xl w-full" />
                                 </div>
                                 <div class="py-3 sm:py-4">
                                     <img src="/uploads/icon_image/{{ $normal->icon_image }}" alt=""
                                         class="rounded-2xl w-full" />
                                 </div>
                             </div>
                             <div class="w-full xl:w-1/2 px-3 sm:px-4">
                                 <div class="my-4 relative">
                                     <img src="/uploads/featured_image/{{ $normal->featured_image }}" alt=""
                                         class="rounded-2xl w-full" />
                                 </div>
                             </div>
                         </div>
                     </div>



                     <div class="w-full lg:w-1/2 xl:w-5/12 px-4">
                         <div class="mt-10 lg:mt-0 normal_caption">
                             <span class="font-semibold text-lg text-primary mb-0 block" style="margin-top: 5px color:;">
                                 {{ $normal->caption }}
                             </span>
                             <h2 class="font-bold text-3xl sm:text-4xl text-dark mb-8   "
                                 style="font-size: 34px font-weight: 700;">
                                 {!! $normal->short_content !!}
                             </h2>
                             <p class="text-base text-body-color mb-8">
                                 {!! $normal->long_content !!}
                             </p>
                         </div>
                     </div>
                 @else
                     <div class="w-full lg:w-2/2 xl:w-12/12 px-4">
                         <div class="mt-10 lg:mt-0 normal_caption">
                             {{-- <span class="font-semibold text-lg text-primary mb-2 block" style="margin-top: 10px color:;">
                                 {{ $normal->caption }}
                             </span> --}}
                             <h2 class="font-bold text-3xl sm:text-4xl text-dark mb-8   "
                                 style="font-size: 34px font-weight: 700;">
                                 {!! $normal->short_content !!}
                             </h2>
                             <p class="text-base text-body-color mb-8">
                                 {!! $normal->long_content !!}
                             </p>
                         </div>
                     </div>
                 @endif



             </div>
         </div>
     </section>
 @endsection

 <!-- End About Us -->
