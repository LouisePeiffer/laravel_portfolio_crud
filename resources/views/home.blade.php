@extends('layouts.index')

@section('content')
    @include('pages.header')
    <main id="main">
        @include('pages.about')
        @include('pages.facts')
        @include('pages.skills')
        @include('pages.portfolio')
        @include('pages.services')
        @include('pages.contact')
        @include('pages.footer')
    </main>
    @include('pages.footer')
@endsection