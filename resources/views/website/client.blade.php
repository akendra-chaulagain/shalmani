<section class="px-4 py-24 mx-auto max-w-7xl">
    <h1 class="mb-3 text-3xl font-bold leading-tight text-center text-gray-900 md:text-4xl">
       {{ $notice_heading->caption }}
    </h1>
    <h2 class="mb-12 text-sm tracking-wide text-center text-gray-800 uppercase">
        {!! $notice_heading->short_content !!}
    </h2>
    <div
        class="container container px-4 py-6 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-8">
        <div class="owl-carousel owl-theme">
            @foreach ($partners as $partner)
                <div class="item bg-primary-light">
                    <img src="{{ $partner->banner_image }}" alt="Todoist Logo" class="block object-contain h-16" />
                </div>
            @endforeach


        </div>
    </div>


</section>
