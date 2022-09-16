 @extends('layouts.master')

 @push('title')
     {{-- {{ $normal->caption }} --}}
 @endpush

 @section('content')
     <!--Page Title-->
     <section class="page-title"
         style="background-image:   linear-gradient(
                  rgba(27, 40, 92, 0.7),
                  rgba(28, 35, 61, 0.7)
                ) ,url('https://images.pexels.com/photos/1181401/pexels-photo-1181401.jpeg?auto=compress&cs=tinysrgb&w=1600')">
         <div class="auto-container">
             <div class="title-box">
                 <h1>Jobs Category</h1>
             </div>
             <ul class="page-breadcrumb">
                 <li><a href="/">Home</a></li>

                 <li>Category</li>
             </ul>
         </div>
     </section>
     <!--End Page Title-->

     <!-- About Us -->
     <section class="about-us">
         <div class="auto-container">
             <div class="row clearfix">
                 @foreach ($job_categories as $cat)
                     <div class="service-block col-lg-3 col-md-6 col-sm-6 col-12  mt-4">
                         <div class="inner-box">
                             <div class="image-box">
                                 <img src="{{ $cat->banner_image }}" alt="banner_img" />
                             </div>
                             <div class="caption-box">
                                 <h3><a href="/{{ $cat->nav_name }}">{{ $cat->caption }}</a></h3>
                             </div>
                         </div>
                     </div>
                 @endforeach


             </div>
         </div>
     </section>
 @endsection

 <!-- End About Us -->
