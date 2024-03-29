@extends('layouts.master')
@section('Title', config('data.faqs.title'))
@section('PageDescription', config('data.home.description'))
@section('PageTags', config('data.home.tags'))
@section('PageTitle', config('data.faqs.page_title'))
@section('PageSubtitle', config('data.faqs.page_subtitle'))
@section('PageBreadcrumbs', config('data.faqs.page_breadcrumbs'))
@section('PageContent')
	@include('includes.faqs_block')
@endsection