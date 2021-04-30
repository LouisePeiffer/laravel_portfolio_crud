@extends('layouts.index')

@section('content')
    {{-- <h1>Bienvenue sur la page Admin</h1> --}}
    <main id="main">
        @include('admin.header.adminHeader')
        @include('admin.about.adminABout')
        @include('admin.facts.adminFacts')
        @include('admin.skills.adminSkills')
        @include('admin.portfolio.adminPortfolio')
        @include('admin.servicee.adminServices')
        @include('admin.contact.adminContact')
    </main>
@endsection