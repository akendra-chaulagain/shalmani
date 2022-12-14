 @extends('layouts.master')
 @push('title')
     Gallery
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
                     Image Album
                 </h1>
             </div>
         </div>
     </section>
     <!-- Album Gallery -->
     <section class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
         <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6">

             @if (isset($photos))
                 @foreach ($photos as $photo)
                     <a href="{{ route('galleryview', $photo->nav_name) }}">
                         <div
                             class="w-full group bg-white rounded-lg sahdow-lg overflow-hidden flex flex-col justify-center items-center shadow">
                             <div>
                                 <img class="object-center object-cover h-auto w-full"
                                     src="https://image.freepik.com/free-vector/illustration-folder-with-document_53876-28502.jpg"
                                     alt="photo" />
                             </div>
                             <div
                                 class="text-center py-8 sm:py-6 opacity-0 group-hover:opacity-100 transition-all delay-200 ease-in cursor-pointer">
                                 <p class="text-xl text-gray-700 font-bold mb-2">{{ $photo->caption }}</p>
                             </div>
                         </div>
                     </a>
                 @endforeach
             @endif
         </div>
     </section>
 @endsection
