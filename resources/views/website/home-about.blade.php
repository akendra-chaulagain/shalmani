{{-- @php
    $all_doc = App\Models\Navigation::all()->where("nav_name","all-document")->childs;
@endphp --}}


<section>
    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        <div class="grid gap-10 lg:grid-cols-5">
            <div class="-mx-4 lg:pl-8 py-6">
                <div class="side-menu">
                    <ul>



                        @foreach ($all_doc as $all_doc_item)
                            @if ($all_doc_item->nav_name == 'sample-specimen')
                                <li class="has-submenu">
                                    <a href="#">{{ $all_doc_item->caption }}</a>
                                    <ul>
                                        @foreach ($all_doc_item->childs as $item)
                                            <li><a href="{{ route('doc_details', $item->nav_name) }}">-
                                                    {{ $item->caption }}</a> </li>
                                        @endforeach

                                    </ul>
                                </li>
                            @else
                                <li>
                                    <a
                                        href="{{ route('doc_details', $all_doc_item->nav_name) }}">{{ $all_doc_item->caption }}</a>
                                </li>
                            @endif
                        @endforeach














                    </ul>
                </div>
            </div>
            <div class="flex flex-col md:pr-8 xl:pr-0 lg:max-w-lg lg:pl-8 lg:col-span-2">
                <h2 class="font-semibold py-6 text-orange-400">About us</h2>
                <div class="max-w-xl mb-6">
                    <h2
                        class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-20">
                        {!! $about->short_content !!}
                    </h2>
                    <p class="text-base text-gray-700 md:text-lg">
                        {!! $about->long_content !!}
                    </p>
                </div>
                <div>
                    <a href="/company/aboutus" aria-label=""
                        class="inline-flex items-center font-semibold transition-colors duration-200 text-blue-400 hover:text-blue-800">
                        Learn more
                        <svg class="inline-block w-3 ml-2" fill="currentColor" viewBox="0 0 12 12">
                            <path
                                d="M9.707,5.293l-5-5A1,1,0,0,0,3.293,1.707L7.586,6,3.293,10.293a1,1,0,1,0,1.414,1.414l5-5A1,1,0,0,0,9.707,5.293Z">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="flex items-center justify-center -mx-4 lg:pl-8 lg:col-span-2">
                <div class="flex flex-col items-end px-3">
                    <img class="object-cover mb-6 rounded shadow-lg h-28 sm:h-48 xl:h-56 w-28 sm:w-48 xl:w-56"
                        src="{{ $about->banner_image }}" alt="" />
                    <img class="object-cover w-20 h-20 rounded shadow-lg sm:h-32 xl:h-40 sm:w-32 xl:w-40"
                        src="/uploads/icon_image/{{ $about->icon_image }}" alt="" />
                </div>
                <div class="px-3">
                    <img class="object-cover w-40 h-40 rounded sm:h-64 xl:h-80 sm:w-64 xl:w-80"
                        src="/uploads/featured_image/{{ $about->featured_image }}" alt="" />
                </div>
            </div>
        </div>
    </div>
</section>
