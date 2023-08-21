@extends('layout')

@section('navbar')
    @include('partials.navbar')
@endsection

@section('main')
    @include('partials.event_heroslide')
    @include('partials.upcoming_event')
    @include('partials.aboutnight')
    @include('partials.aboutitems')
    @include('partials.items')
    @include('partials.additional_services')
    @include('partials.customer_heroslide')
    @include('partials.newsletter')
    @include('partials.gallery')
    @include('partials.explore')
@endsection
