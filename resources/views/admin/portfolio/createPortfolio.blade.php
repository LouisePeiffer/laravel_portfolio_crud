@extends('layouts.index')

@section('content')
    <h1>Add photo</h1>
    <a href="/admin">Retour</a>
    <form method="POST" action="{{route('store.portfolio')}}">
        @csrf
        <label for="image">Image</label>
        <input type="text" name="image" placeholder="image">
        <br>
        <label for="filter">Filter</label>
        <select name="filter" id="filter">
            <option value="">--Please choose an option--</option>
            <option value="filter-app">App</option>
            <option value="filter-web">Web</option>
            <option value="filter-card">Card</option>
        </select>
        <br>
        <button type="submit" class="btn btn-success">Ajouter</button>
    </form>
@endsection