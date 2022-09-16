 @extends('layouts.master')
 @push('title')
     Video Gallery
 @endpush

 @section('content')
     <link rel="stylesheet" href="/website/css/venobox.css" type="text/css" media="screen" />


     {{-- <section class="gallery mt-3 mb-4">
         <div class="container">
             <div class="gallery-view">
                 <div class="row" id="lightgallery">
                     @foreach ($photos as $photo)
                         <div class="item col-md-4 galleryImageItem">
                             <iframe width="100%" height="315" src="{{$photo->link}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                         </div>
                     @endforeach


                 </div>
             </div>
         </div>
     </section> --}}










     <!-- Page Header -->
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
                     Video Gallery
                 </h1>
             </div>
         </div>
     </section>


     <section class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
         <ul role="list" class="grid grid-cols-2 gap-x-4 gap-y-8 sm:grid-cols-3 sm:gap-x-6 lg:grid-cols-4 xl:gap-x-8">

             @foreach ($photos as $photo)
                 <li class="relative">
                     <div
                         class="group block w-full aspect-w-10 aspect-h-7 rounded-lg bg-gray-100 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500 overflow-hidden">
                         <iframe width="100%" height="315" src="{{ $photo->link }}" title="YouTube video player"
                             frameborder="0"
                             allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                             allowfullscreen></iframe>
                         <a href="{{ $photo->link }}" aria-label="Play Video" data-autoplay="true" data-vbtype="video"
                             data-gall="myGallery" data-maxwidth="640px" data-maxheight="360px"
                             class="absolute inset-0 flex items-center justify-center my-video-links w-full h-full transition-colors duration-300 bg-gray-900 bg-opacity-50 group hover:bg-opacity-25">
                             <div
                                 class="flex animate-pulse items-center justify-center w-16 h-16 transition duration-300 transform bg-gray-100 rounded-full shadow-2xl group-hover:scale-110">
                                 <svg class="w-10 text-gray-900" fill="currentColor" viewBox="0 0 24 24">
                                     <path
                                         d="M16.53,11.152l-8-5C8.221,5.958,7.833,5.949,7.515,6.125C7.197,6.302,7,6.636,7,7v10 c0,0.364,0.197,0.698,0.515,0.875C7.667,17.958,7.833,18,8,18c0.184,0,0.368-0.051,0.53-0.152l8-5C16.822,12.665,17,12.345,17,12 S16.822,11.335,16.53,11.152z">
                                     </path>
                                 </svg>
                             </div>
                         </a>
                     </div>
                 </li>
             @endforeach



         </ul>
     </section>

     <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

     <script type="text/javascript" src="/website/js/venobox.min.js"></script>
     <script type="text/javascript" src="/website/js/venobox.js"></script>
 @endsection
