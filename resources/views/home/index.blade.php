@extends('layouts.app')

@section('content')

    @include('home.hero')

    @include('home.about')

    @include('home.counters')

    @include('home.services')

    @include('home.partners')

    @include('home.questions')

    <x-contactUs/>

@endsection
