 @extends('layouts.master')
    @push('title')
      Job Description
    @endpush
 @section('content')
     <section class="page-title"
         style="background-image:   linear-gradient(
                  rgba(27, 40, 92, 0.7),
                  rgba(28, 35, 61, 0.7)
                ) ,url('https://images.pexels.com/photos/1181401/pexels-photo-1181401.jpeg?auto=compress&cs=tinysrgb&w=1600')">
         <div class="auto-container">
             <div class="title-box">
                 <h2 style="color: white">{{ $job->caption ?? 'Job Detail' }}</h2>

             </div>
             <ul class="page-breadcrumb">
                 <li><a href="/">Home</a></li>
                 {{-- <li>{{ $normal->$slug }}</li> --}}

                 <li>{{ $job->caption }}</li>
             </ul>

         </div>
     </section>
     <!--End Page Title-->

     <!-- About Us -->
     <section class="about-us">
         <div class="auto-container">
             <div class="row clearfix">




                 @if ($job->banner_image != null)
                     <div class="video-column col-lg-6 col-md-12 col-sm-12">

                         <div class="inner-column">
                             <figure class="image wow fadeIn" data-wow-delay="600ms"><img src="{{ $job->banner_image }}"
                                     alt="banner_image">
                             </figure>
                         </div>
                     </div>
                 @endif
                 <div
                     class=" @if ($job->banner_image != null) content-column col-lg-6 col-md-12 col-sm-12 @else  col-lg-12 col-md-12 col-sm-12 @endif">
                     <div class="inner-column singleJobData">
                         <div class="jobDetails">
                             <h2 class="text-center"> <span>{{ $job->caption }}</span> </h2>

                             <span>Salary :Rs {{ $job->getJob->salary }} per month</span>
                             <br>
                             <span>Country : {{ $job->getJob->salary }}n</span>
                             <br>
                             <span>Contract time : {{ $job->getJob->salary }} years</span>
                         </div>
                         <br>

                         <div class="text">{!! $job->long_content !!}</div>
                         <button>
                             <a href="/jobapply/{{ $job->nav_name }}" class="theme-button-one" target="_blank">Apply Now</a>
                         </button>

                     </div>
                 </div>



             </div>
         </div>
     </section>
 @endsection
