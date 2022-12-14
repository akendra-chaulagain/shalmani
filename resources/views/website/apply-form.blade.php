 @extends('layouts.master')


 @push('title')
     Apply Form
 @endpush

 @section('content')
     <section>
         <div class="relative bg-gray-600 bg-no-repeat bg-center bg-cover bg-blend-overlay"
             style="
          background-image: url('https://images.pexels.com/photos/325185/pexels-photo-325185.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');
        ">
             <div class="absolute inset-0">
                 <div class="absolute inset-0 bg-black-900" aria-hidden="true"></div>
             </div>
             <div class="relative max-w-7xl mx-auto py-28 px-4 sm:py-28 sm:px-6 lg:px-8">
                 <h1 class="text-3xl font-extrabold tracking-tight text-white sm:text-3xl lg:text-4xl">
                     Apply Now
                 </h1>
             </div>
         </div>
     </section>

<div class="applyForm">
  <section class="w-full bg-white py-20 lg:py-[30px] overflow-hidden relative">
         <div class="px-4 py-4 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-8">
             <div class=" apply-form flex flex-wrap lg:justify-content-center -mx-4">
                 <div class="w-full lg:w-1/2 xl:w-5/12 px-4">
                     <div class="bg-white relative rounded-lg p-8 sm:p-12 shadow-lg">
                         <form action="{{ route('contactstore') }}" method="POST" enctype='multipart/form-data'>
                             @csrf

                             <div class="mb-6">
                                 <input type="text" name="name" placeholder="Your Name"
                                     class="w-full rounded py-3 px-[14px] text-body-color text-base border border-[f0f0f0] outline-none focus-visible:shadow-none focus:border-primary" />
                                 <span class="text-danger" style="color: red">
                                     @error('name')
                                         {{ $message }}
                                     @enderror
                                 </span>
                             </div>
                             {{-- email --}}
                             <div class="mb-6">
                                 <input type="email" name="email" placeholder="Your Email"
                                     class="w-full rounded py-3 px-[14px] text-body-color text-base border border-[f0f0f0] outline-none focus-visible:shadow-none focus:border-primary" />
                                 <span class="text-danger" style="color: red">
                                     @error('email')
                                         {{ $message }}
                                     @enderror
                                 </span>
                             </div>

                             {{-- number --}}
                             <div class="mb-6">
                                 <input type="number" name="number" placeholder="Your Number"
                                     class="w-full rounded py-3 px-[14px] text-body-color text-base border border-[f0f0f0] outline-none focus-visible:shadow-none focus:border-primary" />
                                 <span class="text-danger" style="color: red">
                                     @error('number')
                                         {{ $message }}
                                     @enderror
                             </div>


                             {{-- country --}}
                             <div class="mb-6">
                                 <input type="text" name="country" placeholder="Country"
                                     class="w-full rounded py-3 px-[14px] text-body-color text-base border border-[f0f0f0] outline-none focus-visible:shadow-none focus:border-primary"
                                     value="{{ $job_detail->getJob->country ?? '' }}" />
                                 <span class="text-danger" style="color: red">
                                     @error('number')
                                         {{ $message }}
                                     @enderror






                             </div>
                             <div class="mb-6">
                                 <input type="text" name="apply_for" placeholder="Position"
                                     class="w-full rounded py-3 px-[14px] text-body-color text-base border border-[f0f0f0] outline-none focus-visible:shadow-none focus:border-primary"
                                     value="{{ $job_detail->caption ?? '' }}" />
                                 <span class="text-danger" style="color: red">
                                     @error('apply_for')
                                         {{ $message }}
                                     @enderror
                             </div>



                             <div class="mb-6">
                                 <div class="mb-4">Your CV</div>
                                 <input type="file" name="file" id="fileToUpload">

                             </div>


                             <div class="mb-6">
                                 <textarea rows="6" name="message" placeholder="Your Message"
                                     class="w-full rounded py-3 px-[14px] text-body-color text-base border border-[f0f0f0] resize-none outline-none focus-visible:shadow-none focus:border-primary"></textarea>
                             </div>


                             <div>
                                 <input type="hidden" name="job_id" value="{{ $job_detail->getJob ?? '' }}">
                                 <button type="submit"
                                     class="w-full text-white bg-blue-600 rounded border border-primary p-3 transition hover:bg-opacity-90 apply-form-button">
                                     Submit
                                 </button>
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </section>
</div>
   
 @endsection
