@php
    $home_Job = App\Models\Navigation::query()
        ->where('page_type', 'Job')
        ->orderBy('position', 'ASC')
        ->get()
        ->take(6);
    
@endphp


<section>
    <div class="px-4 py-12 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-16">
        <div class="flex flex-col text-center w-full ">
            <h1 class="sm:text-4xl text-3xl font-bold title-font mb-4 text-gray-900">
                New Jobs
            </h1>

        </div>


        <div class="relative px-4 py-12 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-16">
            <div class="relative grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($home_Job as $job)
                    <div
                        class="flex flex-col justify-between overflow-hidden transition-shadow duration-200 bg-white rounded shadow-xl group hover:shadow-2xl">
                        <div class="p-5 cursor-pointer">
                            <div class="job-detaile-item">
                                <h1>{{ $job->caption }}</h1>
                                <h5>Company : {{ $job->getJob->company_name ?? 'null' }}</h5>
                                <h5>Location : {{ $job->getJob->country ?? 'null' }}i</h5>

                            </div>
                            <div class="job-detaile-item">
                                <h5>Salary : {{ $job->getJob->salary ?? '' }}</h5>
                                {{-- <h5>Contract : 2 Year(s)</h5> --}}
                                <button class="apply_button"> <a href="/jobapply/{{ $job->nav_name }}">Apply
                                        Now</a></button>
                            </div>
                        </div>

                    </div>
                @endforeach

            </div>
        </div>

    </div>
</section>
