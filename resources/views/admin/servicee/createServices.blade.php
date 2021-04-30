@extends('layouts.index')

@section('content')
    <h1>Add Service</h1>
    <a href="/admin">Retour</a>
    <form method="POST" action="{{route('store.service')}}">
        @csrf
        <label for="icone">Icone</label>
        <input type="text" name="icone" placeholder="icone">
        <br>
        <label for="titre">Titre</label>
        <input type="text" name="titre" placeholder="titre">
        <br>
        <label for="texte">Texte</label>
        <input type="text" name="texte" placeholder="texte">
        <br>
        <button type="submit" class="btn btn-success">Ajouter</button>
    </form>
@endsection