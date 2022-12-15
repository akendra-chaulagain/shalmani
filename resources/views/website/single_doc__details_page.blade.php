 @extends('layouts.master')

 @push('title')
     {{ $doc_single->caption }}
 @endpush

 @section('content')
     @if ($doc_single->page_type == 'Normal')
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
                         {{ $doc_single->caption }}
                     </h1>
                 </div>
             </div>
         </section>

         <section class="pt-20 lg:pt-[30px] pb-12 lg:pb-[40px] overflow-hidden">
             <div class="container px-4 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
                 <div class="flex flex-wrap justify-between items-center -mx-4">
                     <img src="{{ $doc_single->banner_image }}" alt="">
                 </div>
             </div>
         </section>
     @else
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
                         {{ $doc_single->caption }}
                     </h1>
                 </div>
             </div>
         </section>

         <section class="text-gray-600 body-font">
             <div class="container px-4 py-6 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-8">

                 <div class="flex flex-wrap -m-4">
                     @foreach ($doc_single->childs as $item)
                         <div class="lg:w-1/3 sm:w-1/2 p-4">
                             <div class="flex flex-wrap justify-between items-center -mx-4 doc_image">
                                 <a href="{{ route('doc_details', $item->nav_name) }}">
                                     <img style="width: 100%" src="{{ $item->banner_image }}" alt="" >
                                 </a>

                             </div>
                         </div>
                     @endforeach
                 </div>
             </div>
         </section>
     @endif
 @endsection
