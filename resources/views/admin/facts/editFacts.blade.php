@extends('layouts.index')

@section('content')
    <h1>Edit facts</h1>
    <a href="{{url('/admin' . '#facts')}}">Retour</a>
    <div class="row">

        @foreach ($allFacts as $fact)
            <form action="{{route('update.fact', $fact->id)}}" method="POST">
                @csrf
                @method('PUT')
                    <div class="form-group m-5">
                        <h3>Fact {{$fact->id}}</h3>
                        <label for="icone">Icone</label>
                        <input type="text" value="{{$fact->icone}}" class="form-control" id="icone" name="icone" placeholder="Icone">
        
                        <label for="chiffre">Chiffre</label>
                        <input type="text" value="{{$fact->chiffre}}" class="form-control" id="chiffre" name="chiffre" placeholder="Chiffre">
        
                        <label for="titre">Titre</label>
                        <input type="text" value="{{$fact->titre}}" class="form-control" id="titre" name="titre" placeholder="titre">
                        
                        <label for="texte">Texte</label>
                        <input type="text" value="{{$fact->texte}}" class="form-control" id="texte" name="texte" placeholder="Texte">
                        
                        <button class="btn btn-primary mt-3" type="submit">Modifier</button>
                    </div>
                </form>
        @endforeach
    </div>
@endsection