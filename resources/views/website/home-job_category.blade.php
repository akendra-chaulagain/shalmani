@php
    $job_categories = App\Models\Navigation::find(2471)->childs;
@endphp

<section class="text-gray-600 body-font">
    <div class="container px-4 py-6 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-8">
        <div class="flex flex-col text-center w-full mb-20">
            <h1 class="sm:text-4xl text-3xl font-bold title-font mb-4 text-gray-900">
                Job Openings
            </h1>

        </div>
        <div class="flex flex-wrap -m-4">
            @foreach ($job_categories as $cat)
                <div class="lg:w-1/3 sm:w-1/2 p-4">
                    <div class="flex relative">
                        <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center"
                            src="{{ $cat->banner_image }}" />
                        <div
                            class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white text-center opacity-0 hover:opacity-100 transition-all ease-in-out cursor-pointer duration-300">
                            <h1 class="title-font text-lg font-bold text-gray-900 mb-3">
                             {{ $cat->caption }}
                            </h1>
                            <p class="leading-relaxed">
                              {{ $cat->short_content ?? " "}}
                            </p>
                            <a class="text-blue-700 font-bold inline-flex items-center md:mb-2 lg:mb-0 py-2"
                                href="/{{ $cat->nav_name }}">View Job
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
