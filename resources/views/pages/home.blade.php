@extends('layouts.master')
@section('Title', config('data.home.title'))
@section('PageDescription', config('data.home.description'))
@section('PageTags', config('data.home.tags'))
@section('PageContent')
	@include('includes.home_block02')
      <!--include('includes.swiper') -->
    @include('includes.home_block01')
    @include('includes.testimonial')
@endsection