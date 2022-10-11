  

  
  
  <section>
      <div class="px-4 py-12 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-16">
          <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
              <h2
                  class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">

                  Top Job Destination

              </h2>

          </div>
          <div class="grid gap-6 row-gap-5 lg:grid-cols-3">
              @foreach ($job_destination as $item)
                  <div>
                      <img class="object-cover w-full h-64 mb-6 rounded shadow-lg lg:h-64 xl:h-64"
                          src="{{ $item->banner_image }}" alt="" />
                      <h5 class="text-center mb-2 text-xl font-bold leading-none sm:text-2xl">
                          {{ $item->caption }}
                      </h5>
                  </div>
              @endforeach


          </div>
          <div class="text-center py-8">
              <a href="/destination"
                  class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md md:w-auto bg-blue-600 hover:bg-blue-700 focus:shadow-outline focus:outline-none">
                  Learn more
              </a>
          </div>

      </div>
  </section>
