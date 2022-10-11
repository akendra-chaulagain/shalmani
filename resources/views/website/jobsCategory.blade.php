{{--       
@php


$destination = App\Models\Navigation::find($slug_detail->id);
   





@endphp --}}


      
      
      @extends('layouts.master')

      @push('title')
          Jobs
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

                
                        <div
                          class="relative px-4 py-12 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-16">
                          <div class="relative grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
                              @foreach ($jobs as $job)
                            
                                  <div
                                      class="flex flex-col justify-between overflow-hidden transition-shadow duration-200 bg-white rounded shadow-xl group hover:shadow-2xl">
                                      <div class="p-5 cursor-pointer">
                                          <div class="job-detaile-item">
                                              <h1>{{ $job->caption }}</h1>
                                              <h5>Company : {{ $job->getJob->company_name ?? 'null' }}</h5>
                                              <h5>Location : {{ $job->getJob->counrty ?? 'null' }}i</h5>

                                          </div>
                                          <div class="job-detaile-item">
                                              <h5>Salary : {{ $job->getJob->salary ?? '' }}</h5>
                                              {{-- <h5>Contract : 2 Year(s)</h5> --}}
                                              <button> <a href="/jobapply/{{ $job->nav_name }}">Apply Now</a></button>
                                          </div>
                                      </div>

                                  </div>
                              @endforeach

                          </div>
                      </div>
                 

                 
                    
                





              </div>
          </section>
      @endsection
