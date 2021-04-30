@extends('layouts.index')

@section('content')
    <h3>Edit un animal :</h3>
    <form action="{{route('update.services', $service->id)}}" method="POST" class="w-75">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="icone">Icone</label>
            <input type="text" value="{{$service->icone}}" class="form-control" id="icone" name="icone" placeholder="icone">
        </div>
        <div class="form-group">
            <label for="titre">Titre</label>
            <input type="text" value="{{$service->titre}}" class="form-control" id="titre" name="titre" placeholder="titre">
        </div>
        <div class="form-group">
            <label for="texte">Texte</label>
            <input type="text" value="{{$service->texte}}" class="form-control" id="texte" name="texte" placeholder="texte">
        </div>
        <button class="btn btn-primary" type="submit">Modifier</button>
    </form>
@endsection