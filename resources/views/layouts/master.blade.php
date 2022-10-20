@php
$global_setting = App\Models\GlobalSetting::all()->first();

$menus = App\Models\Navigation::query()
    ->where('nav_category', 'Main')
    ->where('page_type', '!=', 'Job')
    ->where('page_type', '!=', 'Photo Gallery')
    ->where('page_type', '!=', 'Notice')
    ->where('parent_page_id', 0)
    ->where('page_status', '1')
    ->orderBy('position', 'ASC')
    ->get();
if (isset($normal)) {
    $seo = $normal;
} elseif (isset($job)) {
    $seo = $job;
}

$footer = App\Models\Navigation::query()
    ->where('nav_category', 'Main')
    ->where('parent_page_id', '!=', 0)
    ->where('page_type', '!=', 'Job')

    // ->where('page_status', '1')
    ->orderBy('position', 'ASC')
    ->get();

// jobs footer
$footer_jobs = App\Models\Navigation::find(2471)->childs;
$footer_company = App\Models\Navigation::find(2259)->childs;

@endphp






<!DOCTYPE html>
<html class="no-js" lang="en-us">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


    <!-----SEO--------->

    <title> @stack('title') | {{ $seo->page_titile ?? $global_setting->page_title }}</title>
    <meta name="title" content="{{ $seo->page_titile ?? $global_setting->page_title }}">
    <meta name="description" content="{{ $seo->page_description ?? $global_setting->page_description }}">
    <meta name="keywords" content="{{ $seo->page_keyword ?? $global_setting->page_keyword }}">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="revisit-after" content="1 days">
    <meta name="author" content="{{ $global_setting->site_name ?? '' }}">


    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ $global_setting->website_full_address ?? '' }}">
    <meta property="og:title" content="{{ $seo->page_title ?? $global_setting->page_title }}">
    <meta property="og:description" content="{{ $seo->page_description ?? $global_setting->page_description }}">
    <meta property="og:image" content="{{ $seo->banner_image ?? '/uploads/icons/' . $global_setting->site_logo }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ $global_setting->website_full_address ?? '' }}">
    <meta property="twitter:title" content="{{ $seo->page_title ?? $global_setting->page_title }}">
    <meta property="twitter:description" content="{{ $seo->page_description ?? $global_setting->page_description }}">
    <meta property="twitter:image"
        content="{{ $seo->banner_image ?? '/uploads/icons/' . $global_setting->site_logo }}">

    <link rel="icon" type="image/x-icon" href="{{ '/uploads/icons/' . $global_setting->site_logo }}" />
    <link rel="manifest" href="/website/site.webmanifest" />
    <link rel="apple-touch-icon" href="apple-icon.png" />
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="/website/css/normalize.css" />
    <link rel="stylesheet" href="/website/css/tailwind.css" />


    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

    <!-- Animate Css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!--Swiper-->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!--LINEICONS -->
    <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet" />

    <meta name="theme-color" content="#fafafa" />
</head>

<body>



    <section>
        <div
            class="flex flex-wrap md:justify-between justify-center items-center px-4 mx-auto w-full md:max-w-full lg:max-w-full md:px-24 lg:px-36 py-1 bg-blue-800">
            <div class="flex-wrap inline-flex px-4 py-1 space-x-1">
                <p class="font-semibold text-white hover:text-gray-200 cursor-pointer">
                    Govt. License No: {{ $global_setting->phone_ne }}
                </p>
            </div>
            <div class="flex-wrap inline-flex px-4 py-1 space-x-1 md:space-x-4">
                <a href="#"
                    class="group hover:text-gray-300 cursor-pointer inline-flex items-center text-sm text-white">
                    <span
                        class="border border-white group-hover:bg-white group-hover:text-blue-600 p-2 rounded-full text-white md:mr-2">
                        <svg viewBox="0 0 24 24" fill="currentColor" class="h-4 w-4">
                            <path
                                d="M21 16.42v3.536a1 1 0 0 1-.93.998c-.437.03-.794.046-1.07.046-8.837 0-16-7.163-16-16 0-.276.015-.633.046-1.07A1 1 0 0 1 4.044 3H7.58a.5.5 0 0 1 .498.45c.023.23.044.413.064.552A13.901 13.901 0 0 0 9.35 8.003c.095.2.033.439-.147.567l-2.158 1.542a13.047 13.047 0 0 0 6.844 6.844l1.54-2.154a.462.462 0 0 1 .573-.149 13.901 13.901 0 0 0 4 1.205c.139.02.322.042.55.064a.5.5 0 0 1 .449.498z">
                            </path>
                        </svg></span>
                    <span class="hidden md:block">

                        {{ $global_setting->phone }}


                    </span>
                </a>
                <a href="#"
                    class="group hover:text-gray-300 cursor-pointer inline-flex items-center text-sm text-white">
                    <span
                        class="border border-white group-hover:bg-white group-hover:text-blue-600 p-2 rounded-full text-white md:mr-2">
                        <svg viewBox="0 0 24 24" fill="currentColor" class="h-4 w-4">
                            <path
                                d="M3 3h18a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1zm9.06 8.683L5.648 6.238 4.353 7.762l7.72 6.555 7.581-6.56-1.308-1.513-6.285 5.439z">
                            </path>
                        </svg></span>
                    <span class="hidden md:block">{{ $global_setting->site_email }}</span>
                </a>
            </div>
        </div>
    </section>

    {{-- <Navbar> --}}
    <div class="w-full text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800 sticky top-0 z-20">
        <div x-data="{ open: false }"
            class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
            <div class="flex flex-row items-center justify-between">
                <a href="/"
                    class="text-lg font-bold tracking-widest text-gray-900 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">
                    <img src="/uploads/icons/{{ $global_setting->site_logo }}" alt="_logo" title="" /></a>
                <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                    <!-- HAMBURGER BUTTON -->
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>





            <nav :class="{ 'flex': open, 'hidden': !open }"
                class="flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-end md:flex-row">


                <a class="uppercase px-2 font-semibold lg:px-3 py-6 text-sm border-b-2 border-transparent hover:border-blue-600 leading-[22px] md:px-3 text-gray-700 hover:text-gray-900 hover:bg-gray-50 focus:shadow-outline"
                    href="/">Home</a>
                @foreach ($menus as $menu)
                    @php $submenus = $menu->childs; @endphp
                    <div @click.away="open = false" class="relative" x-data="{ open: false }">
                        <button @click="open = !open"
                            class="flex flex-row items-center w-full uppercase px-2 font-semibold lg:px-3 py-6 text-sm border-b-2 border-transparent hover:border-blue-600 leading-[22px] md:px-3 text-gray-700 hover:text-gray-900 hover:bg-gray-50 focus:shadow-outline @if (isset($slug_detail) && $slug_detail->nav_name == $menu->nav_name)  @endif">
                            {{-- <a href="">
                                <span>{{ $menu->caption }}</span>

                            </a> --}}



                            <a href="@if ($menu->nav_name == 'recruitment-process' || $menu->nav_name == 'destination') {{ $menu->nav_name }} @else # @endif"
                                aria-haspopup="true" aria-expanded="false">{{ $menu->caption }}</a>

                        </button>

                        

                        @if ($submenus->count() > 0)
                            <div x-show="open" x-transition:enter="transition ease-out duration-100"
                                x-transition:enter-start="transform opacity-0 scale-95"
                                x-transition:enter-end="transform opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-75"
                                x-transition:leave-start="transform opacity-100 scale-100"
                                x-transition:leave-end="transform opacity-0 scale-95"
                                class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48 z-10">
                                <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800">

                                    @foreach ($submenus as $sub)
                                        <div class=" inline-flex ">
                                            <a href="#"
                                                class="group hover:text-gray-300 cursor-pointer inline-flex items-center text-sm text-white">
                                                <span
                                                    class="border border-white group-hover:bg-white group-hover:text-blue-600 p-2 rounded-full text-gray-800 md:mr-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class=""
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                                    </svg>
                                                </span>
                                                <span class="text-gray-800 font-semibold">
                                                    <a style="margin-block: 8px"
                                                        href="{{ route('subcategory', [$menu->nav_name, $sub->nav_name]) }}">
                                                        {{ $sub->caption }}
                                                        <br>
                                                    </a>

                                                </span>


                                            </a>

                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        @endif

                    </div>
                @endforeach


                <a class="uppercase px-2 font-semibold lg:px-3 py-6 text-sm border-b-2 border-transparent hover:border-blue-600 leading-[22px] md:px-3 text-gray-700 hover:text-gray-900 hover:bg-gray-50 focus:shadow-outline"
                    href="/contact">Contact</a>
                <div class="py-3 px-3">
                    <a href="/jobapply-form"
                        class="inline-flex items-center justify-center h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded-full shadow-md bg-blue-600 hover:bg-blue-800 focus:shadow-outline focus:outline-none">
                        Job Opening
                    </a>
                </div>
            </nav>

        </div>
    </div>


    @yield('content')



    <footer class="w-full dark-mode:text-gray-200 dark-mode:bg-gray-800 py-4 lg:py-6 bg-blue-800">
        <div class="px-4 pt-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
            <div class="grid gap-16 row-gap-10 mb-8 lg:grid-cols-6">
                <div class="md:max-w-md lg:col-span-2">
                    <a href="/" aria-label="Go home" title="Company" class="inline-flex items-center">
                        <img src="/uploads/icons/{{ $global_setting->site_logo }}" class="w-16" />
                        {{-- <span class="ml-2 text-xl font-bold tracking-wide text-white uppercase">Shalmani Overseas</span> --}}
                    </a>
                    <div class="mt-4 lg:max-w-sm">
                        <p class="text-sm text-white leading-6">
                            {{ $global_setting->page_description }}
                        </p>

                    </div>
                </div>
                <div class="grid grid-cols-2 gap-5 row-gap-8 lg:col-span-4 md:grid-cols-4">

                    <div>
                    <p class="font-bold tracking-wide text-white">Jobs Category</p>
                    <ul class="mt-2 space-y-2">

                        @foreach ($footer_jobs as $key => $menu)
                            @if ($key == 4)
                            @break

                            ;
                        @endif

                        <li>
                            <a href="/job/{{ $menu->nav_name }}"
                                class="text-white transition-colors duration-300 hover:text-blue-400">{{ $menu->caption }}</a>

                        </li>
                    @endforeach




                </ul>
            </div>

                    <div>
                        <p class="font-bold tracking-wide text-white">Company</p>
                        <ul class="mt-2 space-y-2">

                            <li>
                                <a href="/"
                                    class="text-white transition-colors duration-300 hover:text-blue-400">Home</a>

                            </li>
                            @foreach ($footer_company as $key => $menu)
                                @if ($key == 4)
                                @break

                                ;
                            @endif

                            <li>
                                <a href="/company/{{ $menu->nav_name }}"
                                    class="text-white transition-colors duration-300 hover:text-blue-400">{{ $menu->caption }}</a>

                            </li>
                        @endforeach




                    </ul>
                </div>



                {{-- jobs category --}}
                


            <div>
                <p class="font-bold tracking-wide text-white">Quick Links</p>
                <ul class="mt-2 space-y-2">

                    <li>
                        <a href="/gallery/photo-gallery"
                            class="text-white transition-colors duration-300 hover:text-blue-400">Image
                            Gallery</a>
                    </li>
                    <li>
                        <a href="/gallery/video-gallery"
                            class="text-white transition-colors duration-300 hover:text-blue-400">Video
                            Gallery</a>
                    </li>
                    <li>
                        <a href="/contact"
                            class="text-white transition-colors duration-300 hover:text-blue-400">Contact</a>
                    </li>

                </ul>
            </div>




        </div>
    </div>
    <div class="flex flex-col justify-between pt-5 pb-10 border-t sm:flex-row">
        <p class="text-sm text-white">
            © Copyright
            <script>
                document.write(new Date().getFullYear());
            </script>
            <span class="font-semibold">Shalmani Overseas Pvt. Ltd.</span> All
            rights reserved.
        </p>
        <div class="flex items-center mt-4 space-x-4 sm:mt-0">
            <a target="_blank" href="{{ $global_setting->twitter ?? '#' }}"
                class="text-gray-100 transition-colors duration-300 hover:text-blue-400">
                <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                    <path
                        d="M24,4.6c-0.9,0.4-1.8,0.7-2.8,0.8c1-0.6,1.8-1.6,2.2-2.7c-1,0.6-2,1-3.1,1.2c-0.9-1-2.2-1.6-3.6-1.6 c-2.7,0-4.9,2.2-4.9,4.9c0,0.4,0,0.8,0.1,1.1C7.7,8.1,4.1,6.1,1.7,3.1C1.2,3.9,1,4.7,1,5.6c0,1.7,0.9,3.2,2.2,4.1 C2.4,9.7,1.6,9.5,1,9.1c0,0,0,0,0,0.1c0,2.4,1.7,4.4,3.9,4.8c-0.4,0.1-0.8,0.2-1.3,0.2c-0.3,0-0.6,0-0.9-0.1c0.6,2,2.4,3.4,4.6,3.4 c-1.7,1.3-3.8,2.1-6.1,2.1c-0.4,0-0.8,0-1.2-0.1c2.2,1.4,4.8,2.2,7.5,2.2c9.1,0,14-7.5,14-14c0-0.2,0-0.4,0-0.6 C22.5,6.4,23.3,5.5,24,4.6z">
                    </path>
                </svg>
            </a>
            <a target="_blank" href="{{ $global_setting->linkedin ?? '#' }}"
                class="text-gray-100 transition-colors duration-300 hover:text-blue-400">
                <svg viewBox="0 0 30 30" fill="currentColor" class="h-6">
                    <circle cx="15" cy="15" r="4"></circle>
                    <path
                        d="M19.999,3h-10C6.14,3,3,6.141,3,10.001v10C3,23.86,6.141,27,10.001,27h10C23.86,27,27,23.859,27,19.999v-10   C27,6.14,23.859,3,19.999,3z M15,21c-3.309,0-6-2.691-6-6s2.691-6,6-6s6,2.691,6,6S18.309,21,15,21z M22,9c-0.552,0-1-0.448-1-1   c0-0.552,0.448-1,1-1s1,0.448,1,1C23,8.552,22.552,9,22,9z">
                    </path>
                </svg>
            </a>
            <a target="_blank" href="{{ $global_setting->facebook ?? '#' }}"
                class="text-gray-100 transition-colors duration-300 hover:text-blue-400">
                <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                    <path
                        d="M22,0H2C0.895,0,0,0.895,0,2v20c0,1.105,0.895,2,2,2h11v-9h-3v-4h3V8.413c0-3.1,1.893-4.788,4.659-4.788 c1.325,0,2.463,0.099,2.795,0.143v3.24l-1.918,0.001c-1.504,0-1.795,0.715-1.795,1.763V11h4.44l-1,4h-3.44v9H22c1.105,0,2-0.895,2-2 V2C24,0.895,23.105,0,22,0z">
                    </path>
                </svg>
            </a>
        </div>
    </div>
</div>
</footer>



<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="/website/js/vendor/modernizr-3.11.2.min.js"></script>
<script src="/website/js/plugins.js"></script>
<script src="/website/js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
    integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- owl-carousel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"
integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA=="
crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
    window.ga = function() {
        ga.q.push(arguments);
    };
    ga.q = [];
    ga.l = +new Date();
    ga("create", "UA-XXXXX-Y", "auto");
    ga("set", "anonymizeIp", true);
    ga("set", "transport", "beacon");
    ga("send", "pageview");
</script>


<script>
    $('.owl-testomonials').owlCarousel({
        loop: true,
        autoplay: true,
        items: 1,
        nav: false,
        dots: true,
        autoplayHoverPause: true,
        animateOut: 'slideOutUp',
        animateIn: 'slideInUp',
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })
</script>


<script>
    $('.client-slider').owlCarousel({
        loop: true,
        margin: 50,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: false,
        // animateOut: 'slideOutUp',
        // animateIn: 'slideInUp'
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 6
            }
        }
    })
</script>




<script src="/website/js/lightbox.js"></script>

<script src="https://www.google-analytics.com/analytics.js" async></script>




</body>

</html>
