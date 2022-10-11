@extends('layouts.master')

@push('title')
   {{ $slug_detail->caption ?? '' }}
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
                    {{ $slug_detail->caption ?? 'All Jobs' }}
                </h1>
            </div>
        </div>
    </section>
    <!-- ..........................................job-detaile.................... -->




    <section>
        <div class="px-4 py-12 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-16">
            <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
                <h2
                    class="max-w-lg mb-6 text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
                    <span class="relative inline-block">
                        <span class="relative">{{ $slug_detail->caption ?? '' }}</span>
                    </span>

                </h2>
                <p class="text-base text-gray-700 md:text-lg">
                    {!! $slug_detail->short_content ?? '' !!}

                </p>
            </div>



            <section class="px-4 py-8 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
                
                <div class="grid grid-cols-1 gap-4 md:grid-cols-2 sm:grid-cols-1 lg:grid-cols-4 xl:grid-cols-4">
                    @foreach ($destination_data as $destination_data_item)
                         <div class="group transform hover:scale-105 hover:transition-all hover:duration-300 hover:ease-in-out">
                        <div class="max-w-[400px] max-h-[400px] w-full h-full mx-auto mb-10">
                            <div class="relative rounded-lg overflow-hidden hover:shadow cursor-auto">
                                <img src="{{ $destination_data_item->banner_image }}"
                                    alt="image" class="w-full h-64" />
                                <div class="absolute w-full bottom-5 left-0 text-center">
                                    <div class="bg-white relative rounded-lg overflow-hidden mx-5 py-5 px-3">
                                        <h3 class="text-base font-semibold text-dark">{{ $destination_data_item->caption }}</h3>
                                        <div>
                                            <span class="absolute left-0 bottom-0">
                                                <svg width="61" height="30" viewBox="0 0 61 30" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="16" cy="45" r="45" fill="#13C296"
                                                        fill-opacity="0.11" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                   
                    <!-- card 2 -->
                   
                    
                </div>
            </section>









        </div>
    </section>
@endsection
