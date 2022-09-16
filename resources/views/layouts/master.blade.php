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

$notice = App\Models\Navigation::query()
    ->where('nav_category', 'Main')
    ->where('page_type', '=', 'Notice')

    ->where('page_status', '1')
    ->orderBy('position', 'ASC')
    ->get();
if (isset($normal)) {
    $seo = $normal;
} elseif (isset($job)) {
    $seo = $job;
}

// return $notice;

@endphp






<!DOCTYPE html>
<html class="no-js" lang="en-us">

<head>
    <meta charset="utf-8" />
    <title>Shalmani Overseas Pvt. Ltd.</title>
    <meta name="description" content="Shalmani Overseas Pvt. Ltd." />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta property="og:title" content="Shalmani Overseas" />
    <meta property="og:type" content="homepage" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />

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
                    Govt. License No: 828/066/067
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
                    <span class="hidden md:block">+977-0000000</span>
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
                    <span class="hidden md:block">info@company.com</span>
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
                    <img class="w-20 h-20" src="./img/logo/SO-Logo.svg" alt="Shalmani Overseas" /></a>
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

            {{-- @foreach ($menus as $menu)
                @php $submenus = $menu->childs; @endphp
                <li class="dropdown" @if (isset($slug_detail) && $slug_detail->nav_name == $menu->nav_name)  @endif>
                    
                    <a class="dropdown-toggle" role="button"
                        aria-haspopup="true" aria-expanded="false"
                        @if ($submenus->count() > 0) href="{{ route('category', $menu->nav_name) }}" @else href="{{ route('category', $menu->nav_name) }}" @endif>{{ $menu->caption }}</a>


                    <i class="ddl-switch fa fa-angle-down"></i>
                    @if ($submenus->count() > 0)
                        <ul class="dropdown-menu">
                            @foreach ($submenus as $sub)
                                <li><a
                                        href="{{ route('subcategory', [$menu->nav_name, $sub->nav_name]) }}">{{ $sub->caption }}</a>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </li>
            @endforeach --}}



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

                            <a href="#" aria-haspopup="true" aria-expanded="false">{{ $menu->caption }}</a>

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
                                        <div class="flex-wrap inline-flex ">
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
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 50,
            nav: false,
            dots: false,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayHoverPause: false,
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
