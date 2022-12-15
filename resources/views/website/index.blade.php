 @extends('layouts.master')
 @push('title')
     Home
 @endpush

 @section('content')
     @include('website.slider')
     @include('website.home-about')
     @include('website.home_mission')
     @include('website.home-job_category')
     @include('website.home-job-destination')
     @include('website.testomonials')
     @include('website.client')
 @endsection
