 @extends('layouts.master')
 @push('title')
     Image Gallery
 @endpush

 @section('content')
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />


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
                     Image Gallery
                 </h1>
             </div>
         </div>
     </section>

     <section class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
         <div class="container">
             <div class="gallery_container flex flex-wrap justify-evenly">
                 @foreach ($photos as $photo)
                     <img src="/uploads/photo_gallery/{{ $photo->file }}" alt=""
                         class="img-gallery hover:transition-all hover:duration-300 hover:ease-in-out hover:transform hover:scale-110" />
                 @endforeach


             </div>
         </div>
     </section>
     <section class="image-lightbox bg-black fixed bg-opacity-60 top-0 left-0 flex justify-center items-center">
         <svg class="h-6 w-6 close absolute top-[40px] right-[30px] width-[40px] cursor-pointer text-white text-extrabold text-1xl hover:rounded-full hover:bg-gray-300 hover:text-gray-600"
             fill="none" viewBox="0 0 24 24" stroke="currentColor">
             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
         </svg>
         <img src="./img/img-3.jpg" alt="" class="image-pop object-cover rounded transition-all duration-300" />
     </section>
 @endsection
