      @extends('layouts.master')

      @push('title')
          Jobs
      @endpush

      @section('content')
          {{-- <section class="page-title"
              style="background-image:   linear-gradient(
                  rgba(27, 40, 92, 0.7),
                  rgba(28, 35, 61, 0.7)
                ) ,url('https://images.pexels.com/photos/1181401/pexels-photo-1181401.jpeg?auto=compress&cs=tinysrgb&w=1600')">

              <div class="auto-container">
                  <div class="title-box">
                      <h1>{{ $slug_detail->caption ?? 'All Jobs' }}</h1>
                  </div>

                  <ul class="page-breadcrumb">
                      <li><a href="/">Home</a></li>
                      <li>{{ $slug_detail->caption ?? 'All Jobs' }}</li>
                  </ul>
              </div>
          </section>

          <section class="services-section">
              <div class="auto-container">
                  <div class="sec-title style-two">
                      <div class="row clearfix">
                          <div class="title-column col-lg-4 col-md-12 col-sm-12">
                              <h2 style="color: #6ebb3e">

                               
                                      {{ $slug_detail->caption ?? 'All Jobs' }}
                                 
                              </h2>
                          </div>
                          <div class="text-column col-lg-8 col-md-12 col-sm-12">
                              <div class="text">
                                  Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                  Corporis, dicta reprehenderit soluta, atque explicabo pariatur
                                  eos vero, necessitatibus autem dignissimos animi quibusdam?
                                  Illo, saepe cupiditate.
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="row clearfix">
                      @foreach ($jobs as $job)
                          <div class="job-detail  ">
                              <div class="job_cat_box mt-4">
                                  <div class="row">
                                      <div class="col-sm-3">
                                          <div class="Job_img-box">
                                              <a href="{{ route('single_job', $job->nav_name) }}">
                                                  <img src="{{ $job->banner_image }}" alt="banner_img"></a>
                                          </div>
                                      </div>
                                      <div class="col-sm-5 job_cat_data">
                                          <a href="{{ route('single_job', $job->nav_name ?? " ") }}">
                                              <div class="single_job_text">
                                                  <h6>{{ $job->caption }}</h6>

                                                  <span
                                                      class="job_company mt-1">{{ $job->getJob->company_name ?? 'null' }}</span>
                                                  <span class="mt-1"><i
                                                          class="fa fa-map-marker "></i>{{ $job->getJob->country ?? 'null' }}</span>

                                              </div> 
                                          </a>
                                      </div>
                                      <div class="col-sm-4 job_cat_data_right">
                                          <div class="job_cat_data_right_text">
                                              <span class="job_company">Salary : MYR {{ $job->getJob->salary ?? '' }}
                                                  Monthly</span>
                                              <span>Contract : {{ $job->getJob->contract_time ?? '' }} Year(s)</span>
                                              <a href="/jobapply/{{ $job->nav_name }}" class="apply-button"
                                                  target="_blank">Apply Now</a>
                                          </div> 
                                      </div>
                                  </div>
                              </div>


                          </div>
                      @endforeach



                   
                  </div>

              </div>
          </section> --}}






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
                              <span class="relative">{{ $slug_detail->caption ?? 'All Jobs' }}</span>
                          </span>

                      </h2>
                      <p class="text-base text-gray-700 md:text-lg">
                          Here is a list of jobs for Business Services sector. The list shows the latest online job vacancy
                          in
                          Business Services
                          with job details. If the job requirement matches your skills and experience, click on “Apply
                          Now” button
                          to send your job application.
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
                                      <h5>Contract : 2 Year(s)</h5>
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
