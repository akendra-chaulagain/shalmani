  @php
      $home_mission = App\Models\Navigation::find(2539);
  @endphp

  <section class="flex items-center justify-center py-16 bg-gray-100 min-w-screen">
      <div class="max-w-6xl px-12 mx-auto bg-gray-100 md:px-16 xl:px-10">
          <div class="flex flex-col items-center lg:flex-row">
              <div class="flex flex-col items-start justify-center w-full h-full pr-8 mb-10 lg:mb-0 lg:w-1/2">
                  <h2
                      class="text-4xl font-extrabold leading-10 tracking-tight text-gray-900 sm:text-4xl sm:leading-none md:text-4xl lg:text-4xl xl:text-4xl">
                      Vision & Mission
                  </h2>
              </div>
              <div class="w-full lg:w-1/2">
                  <p class="mb-6">
                      {!! Str::limit($home_mission->long_content, 300) !!}

                  </p>
                  <a style="margin-top: 15px" href="/company/{{ $home_mission->nav_name }}"
                      class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md md:w-auto bg-blue-600 hover:bg-blue-700 focus:shadow-outline focus:outline-none">
                      Learn more
                  </a>
              </div>
          </div>
      </div>
  </section>
