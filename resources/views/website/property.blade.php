@extends('layouts.website')
@section('metatags')

	@isset($property->meta_title)
	<title>{{$property->meta_title}}</title>
	@endisset

	@isset($property->meta_description)
	<meta name="description" content="{{$property->meta_description}}">
	@endisset

@endsection
@section('content')

	@include('components.property_hero_section')

	@include('components.idk')

	@include('components.property_about_section')

	@include('components.property_payment_plan')

	@include('components.property_video_section')

	@include('components.features_section')

	@include('components.property_gallery_section')

	@include('components.contact_us_section')

	@include('components.property_modal')

	


@endsection