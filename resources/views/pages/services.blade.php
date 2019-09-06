@extends('layouts.master')
@section('Title', config('data.services.title'))
@section('PageDescription', config('data.home.description'))
@section('PageTags', config('data.home.tags'))
@section('PageTitle', config('data.services.page_title'))
@section('PageSubtitle', config('data.services.page_subtitle'))
@section('PageBreadcrumbs', config('data.services.page_breadcrumbs'))
@section('PageContent')
	@include('includes.services_block')
	<!--include('includes.services_block01') -->
@endsection