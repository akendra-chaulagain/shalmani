@extends('layouts.master')

@push('title')
    Contact Us
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
                    Contact
                </h1>
            </div>
        </div>
    </section>

    <!-- ====== Contact Section Start -->
    <section class="bg-white py-20 lg:py-[30px] overflow-hidden relative">
        <div class="px-4 py-4 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-8">
            <div class="flex flex-wrap lg:justify-between -mx-4">
                <div class="w-full lg:w-1/2 xl:w-6/12 px-4">
                    <div class="max-w-[570px] mb-12 lg:mb-0">
                        <h2
                            class="text-dark mb-6 uppercase font-bold text-[32px] sm:text-[40px] lg:text-[36px] xl:text-[40px]">
                            GET IN TOUCH WITH US
                        </h2>
                        <p class="text-base text-body-color leading-relaxed mb-9">
                            Feel Free To Contact Us.
                        </p>
                        <div class="flex mb-8 max-w-[370px] w-full">
                            <div
                                class="max-w-[60px] sm:max-w-[70px] w-full h-[60px] sm:h-[70px] flex items-center justify-center mr-6 overflow-hidden bg-primary bg-opacity-5 text-primary rounded">
                                <i class="fa-sharp fa-solid fa-location-pin" style="color: white; font-size:30px"></i>

                            </div>
                            <div class="w-full">
                                <h4 class="font-bold text-dark text-xl mb-1">Our Location</h4>
                                <p class="text-base text-body-color">{{ $global_setting->website_full_address }}
                                    {{ $global_setting->address_ne }}</p>
                            </div>
                        </div>
                        <div class="flex mb-8 max-w-[370px] w-full">
                            <div
                                class="max-w-[60px] sm:max-w-[70px] w-full h-[60px] sm:h-[70px] flex items-center justify-center mr-6 overflow-hidden bg-primary bg-opacity-5 text-primary rounded">
                                <i class="fa-sharp fa-solid fa-phone" style="color: white; font-size:25px"></i>
                            </div>
                            <div class="w-full">
                                <h4 class="font-bold text-dark text-xl mb-1">Phone Number</h4>
                                <p class="text-base text-body-color">Tel {{ $global_setting->phone }}</p>
                            </div>
                        </div>
                        <div class="flex mb-8 max-w-[370px] w-full">
                            <div
                                class="max-w-[60px] sm:max-w-[70px] w-full h-[60px] sm:h-[70px] flex items-center justify-center mr-6 overflow-hidden bg-primary bg-opacity-5 text-primary rounded">
                                 <i class="fa-sharp fa-solid fa-envelope" style="color: white; font-size:25px"></i>
                            </div>
                            <div class="w-full">
                                <h4 class="font-bold text-dark text-xl mb-1">
                                    Email Address
                                </h4>
                                <p class="text-base text-body-color">
                                    {{ $global_setting->site_email }}</span></a>

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-1/2 xl:w-5/12 px-4">
                    <div class="bg-white relative rounded-lg p-8 sm:p-12 shadow-lg">



                        <form action="{{ route('contactstore') }}" method="POST" autocomplete="on"
                            enctype='multipart/form-data'>
                            @csrf


                            <div class="mb-6">
                                <input type="text" name="name" placeholder="Your Name"
                                    class="w-full rounded py-3 px-[14px] text-body-color text-base border border-[f0f0f0] outline-none focus-visible:shadow-none focus:border-primary" />
                            </div>
                            <div class="mb-6">
                                <input type="email" name="email" placeholder="Your Email"
                                    class="w-full rounded py-3 px-[14px] text-body-color text-base border border-[f0f0f0] outline-none focus-visible:shadow-none focus:border-primary" />
                            </div>
                            <div class="mb-6">
                                <input type="text" name="number" placeholder="Your Phone"
                                    class="w-full rounded py-3 px-[14px] text-body-color text-base border border-[f0f0f0] outline-none focus-visible:shadow-none focus:border-primary" />
                            </div>
                            <div class="mb-6">
                                <textarea rows="6" name="message" placeholder="Your Message"
                                    class="w-full rounded py-3 px-[14px] text-body-color text-base border border-[f0f0f0] resize-none outline-none focus-visible:shadow-none focus:border-primary"></textarea>
                            </div>
                            <div>
                                <button type="submit"
                                    class="w-full text-white bg-blue-600 rounded border border-primary p-3 transition hover:bg-opacity-90">
                                    Send Message
                                </button>
                            </div>
                        </form>
                        <div>
                            <span class="absolute -top-10 -right-9 z-[-1]">
                                <svg width="100" height="100" viewBox="0 0 100 100" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M0 100C0 44.7715 0 0 0 0C55.2285 0 100 44.7715 100 100C100 100 100 100 0 100Z"
                                        fill="#3056D3" />
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Contact Section End -->
    <div class="w-full h-96">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3531.4667363154454!2d85.33924361472678!3d27.733746582781034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1997bb7aa729%3A0xde3df4f6a9881eb2!2sShalmani%20Overseas%20Pvt.%20Ltd.!5e0!3m2!1sen!2snp!4v1643106069807!5m2!1sen!2snp"
            width="100%" height="400" style="border: 0" allowfullscreen="" loading="lazy"></iframe>
    </div>
@endsection
