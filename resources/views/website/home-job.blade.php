   <section class="services-section">
       <div class="auto-container">
           <div class="sec-title style-two">
               <div class="row clearfix">
                   <div class="title-column">
                       <h2 style="color: #6ebb3e" class="text-center">
                           AVAILABLE JOBS
                       </h2>
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
                                       <a href="{{ route('single_job', $job->nav_name) }}"><img
                                               src="{{ $job->banner_image }}" alt=""></a>
                                   </div>
                               </div>
                               <div class="col-sm-5 job_cat_data">
                                   <a href="{{ route('single_job', $job->nav_name) }}">
                                       <div class="single_job_text">
                                           <h6>{{ $job->caption }}</h6>

                                           <span
                                               class="job_company mt-1">{{ $job->getJob->company_name ?? 'null' }}</span>
                                           <span class="mt-1"><i
                                                   class="fa fa-map-marker "></i>{{ $job->getJob->country ?? 'null' }}</span>

                                       </div> <!-- /.text -->
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
               <div class="view-all-btn  text-center m-4">
                   <a href="/all-jobs" class="theme-button-one">View All</a>
               </div>

           </div>

       </div>
   </section>
