@extends('public::index')

@section('content')
    @include('public::sections.banner')
    @include('public::sections.services')
    @include('public::sections.about')
    @include('public::sections.categories')
    @include('public::sections.courses')
    @include('public::sections.team')
    @include('public::sections.testimonial')
@endsection
