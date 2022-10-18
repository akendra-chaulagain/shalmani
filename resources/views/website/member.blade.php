{{--       
@php

$destination = App\Models\Navigation::find($slug_detail->id);

@endphp --}}




@extends('layouts.master')

@push('title')
    Jobs
@endpush

@section('content')
   <section>
         <div class="relative bg-gray-600 bg-no-repeat bg-center bg-cover bg-blend-overlay"
             style="
          background-image: url('https://images.pexels.com/photos/37646/new-york-skyline-new-york-city-city-37646.jpeg?cs=srgb&dl=pexels-pixabay-37646.jpg&fm=jpg');
        ">
             <div class="absolute inset-0">
                 <div class="absolute inset-0 bg-black-900" aria-hidden="true"></div>
             </div>
             <div class="relative max-w-7xl mx-auto py-28 px-4 sm:py-28 sm:px-6 lg:px-8">
                 <h1 class="text-3xl font-extrabold tracking-tight text-white sm:text-3xl lg:text-4xl">
                      {{ $normal->caption }}
                 </h1>
             </div>
         </div>
     </section>
    <!-- ..........................................job-detaile.................... -->


    <h1>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat itaque minus molestias autem cum odit? Eaque dicta
        accusamus, ipsa sunt porro ut distinctio eos numquam fuga quaerat. Tenetur incidunt nobis impedit officia natus,
        recusandae et a magni, temporibus, aliquam id laborum! Minus provident assumenda, recusandae placeat tenetur magnam
        nemo aperiam maxime pariatur, repellendus praesentium debitis at, dolore ab! Quidem doloremque id nam reprehenderit
        blanditiis quas quia, natus adipisci ratione est et recusandae voluptates consequuntur distinctio saepe cum fugit
        rerum, veniam sapiente iusto ipsa, porro iure? Doloribus nulla rem quasi iusto consequatur numquam unde alias
        debitis totam nisi cumque, placeat laborum.</h1>
@endsection
