 <section>
     <div class="px-4 py-12 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-16">
         <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
             <h2
                 class="max-w-lg mb-6 text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
                 <span class="relative inline-block">
                     <span class="relative">{{ $notice_heading->caption }}</span>
                 </span>
                 We Offer
             </h2>
             <p class="text-base text-gray-700 md:text-lg">
                 {{ $notice_heading->short_content }}
             </p>
         </div>
         <div class="relative px-4 py-12 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-16">
             <div class="relative grid gap-5 sm:grid-cols-2 lg:grid-cols-4">
                 @foreach ($services as $service)
                     <div
                         class="flex flex-col justify-between overflow-hidden transition-shadow duration-200 bg-white rounded shadow-xl group hover:shadow-2xl">
                         <div class="p-5 cursor-pointer">
                             <div class="flex items-center justify-center w-12 h-12 mb-4 rounded-full bg-blue-50">
                                 <img class="w-12 h-12" src="{{ $service->banner_image }}" />
                             </div>
                             <p class="mb-2 font-bold">Hotel Service</p>
                             <p class="text-sm leading-5 text-gray-900">
                                 Sed ut perspiciatis unde omnis iste. Lorem ipsum dolor sit
                                 amet, consectetur adipiscing elit.
                             </p>
                         </div>
                         <div
                             class="w-full h-1 ml-auto duration-300 origin-left transform scale-x-0 bg-red-500 group-hover:scale-x-100">
                         </div>
                     </div>
                 @endforeach


             </div>
         </div>
         <div class="text-center">
             <a href="/"
                 class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md md:w-auto bg-blue-600 hover:bg-blue-800 focus:shadow-outline focus:outline-none">
                 Learn more
             </a>
         </div>
     </div>
 </section>
