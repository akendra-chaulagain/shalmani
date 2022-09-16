   {{-- <section class="testimonials-section">
       <div class="auto-container">
           <div class="sec-title style-two">
               <div class="row clearfix">
                   <div class="title-column col-lg-4 col-md-12 col-sm-12">
                       <h2 style="color: #71BC47"> Testimonials</h2>
                   </div>

               </div>
           </div>

           <div class="testimonial-carousel owl-carousel owl-theme">
             
               @foreach ($testimonial as $testimonial_item)
                   <div class="testimonial-block">
                       <div class="inner-box">

                           <div class="text">

                               {{ $testimonial_item->short_content }}
                           </div>
                           

                           <div class="info-box">

                               <h5 style="color: #71BC47" class="name">{{ $testimonial_item->caption }}</h5>

                           </div>
                       </div>
                   </div>
               @endforeach



           </div>
       </div>
   </section> --}}


     <section class="flex items-center justify-center py-16 bg-gray-100 min-w-screen">
    <div class="max-w-6xl px-12 mx-auto bg-gray-100 md:px-16 xl:px-10">
      <div class="flex flex-col items-center lg:flex-row">
        <div class="flex flex-col items-start justify-center w-full h-full pr-8 mb-10 lg:mb-0 lg:w-1/2">
          <h2
            class="text-4xl font-extrabold leading-10 tracking-tight text-gray-900 sm:text-5xl sm:leading-none md:text-6xl lg:text-5xl xl:text-6xl">
            Testimonials
          </h2>
          <p class="my-6 text-lg text-gray-600">
            Don't just take our word for it, read from our extensive list of
            case studies and customer testimonials.
          </p>
          
        </div>
        <div class="w-full lg:w-1/2">
        
       
          


            @foreach ($testimonial as $testimonial_item)
                       <blockquote style="margin-bottom: 20px"
                           class="flex items-center justify-between w-full col-span-1 p-6 bg-white rounded-lg hover:shadow-lg hover:cursor-pointer transition-all duration-300">
                           <div class="flex flex-col pr-8" >
                               <div class="relative pl-12">
                                   <svg class="absolute left-0 w-10 h-10 text-blue-500 fill-current"
                                       xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 125">
                                       <path
                                           d="M30.7 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2C12.7 83.1 5 72.6 5 61.5c0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S30.7 31.6 30.7 42zM82.4 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2-11.8 0-19.5-10.5-19.5-21.6 0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S82.4 31.6 82.4 42z">
                                       </path>
                                   </svg>
                                   <p class="mt-2 text-sm text-gray-600 sm:text-base lg:text-sm xl:text-base">
                                       {{ $testimonial_item->short_content }}
                                   </p>
                               </div>

                               <h3
                                   class="pl-12 mt-3 text-sm font-medium leading-5 text-gray-800 truncate sm:text-base lg:text-sm">
                                   {{ $testimonial_item->caption }}
                                
                               </h3>
                           </div>
                           @if ($testimonial_item->banner_image)
                               <img class="flex-shrink-0 w-20 h-20 bg-gray-300 rounded-full xl:w-24 xl:h-24"
                                   src="  {{ $testimonial_item->banner_image }}" alt="" />
                           @else
                               <img class="flex-shrink-0 w-20 h-20 bg-gray-300 rounded-full xl:w-24 xl:h-24"
                                   src=" https://demo.radiantnepal.info/nathm/assets/images/team/default-user.jpg" alt="" />
                           @endif

                       </blockquote>
                   @endforeach



        </div>
      </div>
    </div>
  </section>