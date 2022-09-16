 @extends('layouts.master')
 @push('title')
     Gallery
 @endpush
 @section('content')
     {{-- <section class="page-title"
         style="background-image:   linear-gradient(
                                  rgba(27, 40, 92, 0.7),
                                  rgba(28, 35, 61, 0.7)
                                ) ,url('https://images.pexels.com/photos/1181401/pexels-photo-1181401.jpeg?auto=compress&cs=tinysrgb&w=1600')">
         <div class="auto-container">
             <div class="title-box">
                 <h1>Image Gallery</h1>
             </div>
             <ul class="page-breadcrumb">
                 <li><a href="/">Home</a></li>
                 <li>Image Gallery</li>
             </ul>
         </div>
     </section>



     <div class="folder-spacing">
         <div class="container">
             <div class="row">
                

                 @if (isset($photos))
                     <div class="folder-spacing">
                         <div class="container">
                             <div class="row">
                               
                                 @foreach ($photos as $photo)
                                     <div class="col-lg-3 col-md-6  col-12">
                                         <a href="{{ route('galleryview', $photo->nav_name) }}">
                                             <div class="folder">
                                                 <div class="folder-inside"
                                                     style="background: url({{ $photo->banner_image }}) no-repeat; background-size: cover;">
                                                 </div>
                                             </div>
                                             <div class="folder_data">
                                                 <a href="#">{{ $photo->caption }}</a>
                                             </div>
                                         </a>
                                     </div>
                                 @endforeach
                                 
                             </div>
                         </div>
                     </div>
             </div>
             @endif


         </div>
     </div> --}}




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
