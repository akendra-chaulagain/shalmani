 
 {{-- @php


$recruitment_chid = App\Models\Navigation::find($recruitment->parent_page_id);
   



@endphp --}}

 
 
 
 @extends('layouts.master')

 @push('title')
     {{ $recruitment->caption }}
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
                     {{ $recruitment->caption ?? ' ' }}
                 </h1>
             </div>
         </div>
     </section>
     <!-- Process -->
     <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
         <div class="grid gap-6 row-gap-10 lg:grid-cols-2">
             <div class="lg:py-6 lg:pr-16">

                @foreach ($recruitment_chid as $recruitment_chiditem)
                    
                 <div class="flex">
                     <div class="flex flex-col items-center mr-4">
                         <div>
                             <div class="flex items-center justify-center w-10 h-10 border rounded-full">
                                 <svg class="w-4 text-gray-600" stroke="currentColor" stroke-width="2"
                                     stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                     <line fill="none" stroke-miterlimit="10" x1="12" y1="2"
                                         x2="12" y2="22"></line>
                                     <polyline fill="none" stroke-miterlimit="10" points="19,15 12,22 5,15"></polyline>
                                 </svg>
                             </div>
                         </div>
                         <div class="w-px h-full bg-gray-300"></div>
                     </div>
                     <div class="pt-1 pb-8">
                         <p class="mb-2 text-lg font-bold">{{ $recruitment_chiditem->caption ?? " " }}</p>
                         <p class="text-gray-700">
                             {{ $recruitment_chiditem->short_content }}
                         </p>
                     </div>
                 </div>
                @endforeach
                
             </div>
             <div class="relative">
                 <img class="inset-0 object-cover object-middle w-full rounded shadow-lg h-96 lg:absolute lg:h-full"
                     src="{{ $recruitment->banner_image }}"
                     alt="" />
             </div>
         </div>
     </div>
     <!-- Drop CV -->

     <section class="px-0 py-12 mx-auto max-w-7xl sm:px-8">
         <div class="text-white py-4 px-16 bg-blue-800 border-blue-800 rounded-none card card-body sm:rounded-lg">
             <div class="flex flex-col items-center justify-between px-1 py-4 lg:flex-row sm:py-3 sm:px-3">
                 <p class="mb-6 text-base font-semibold lg:mb-0">
                    Send Your CV Jor Jobs
                 </p>
                 <button
                     class="w-full text-blue-800 shadow bg-white rounded-full px-12 py-3 sm:w-auto font-semibold uppercase hover:bg-blue-600 hover:text-white transition-all duration-300 ease-in-out pointer-events-auto">
                     <a href="/jobapply-form">Drop CV</a>
                 </button>
             </div>
         </div>
     </section>
 @endsection

 <!-- End About Us -->
