@extends('layouts.master')
@section('Title', config('data.blogs.title'))
@section('PageDescription', config('data.home.description'))
@section('PageTags', config('data.home.tags'))
@section('PageTitle', config('data.blogs.page_title'))
@section('PageSubtitle', config('data.blogs.page_subtitle'))
@section('PageBreadcrumbs', config('data.blogs.page_breadcrumbs'))
@section('PageContent')
	@include('includes.blogs_block')
	<!--include('includes.blogs_block01') -->
@endsection