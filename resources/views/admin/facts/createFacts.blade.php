@extends('layouts.index')

@section('content')
    <div class="form-group m-5">
        <a href="{{url('/admin' . '#facts')}}">Retour</a>
        <h3>Add a fact</h3>
        <form action="{{route('store.fact')}}" method="POST">
            @csrf
            <label for="icone">Icone</label>
            <input type="text" class="form-control @error('icone') is-invalid @enderror"  id="icone" name="icone" placeholder="Icone">
            @error('icone')
                <span class="invalid-feedback">
                    <strong>Erreur connasse</strong>
                </span>
            @enderror
    
            <label for="chiffre">Chiffre</label>
            <input type="text"  class="form-control @error('icone') is-invalid @enderror" id="chiffre" name="chiffre" placeholder="Chiffre">
            @error('icone')
                <span class="invalid-feedback">
                    <strong>Erreur connasse</strong>
                </span>
            @enderror

            <label for="titre">Titre</label>
            <input type="text" class="form-control @error('icone') is-invalid @enderror" id="titre" name="titre" placeholder="titre">
            @error('icone')
                <span class="invalid-feedback">
                    <strong>Erreur connasse</strong>
                </span>
            @enderror

            <label for="texte">Texte</label>
            <input type="text" class="form-control @error('icone') is-invalid @enderror" id="texte" name="texte" placeholder="Texte">
            @error('icone')
                <span class="invalid-feedback">
                    <strong>Erreur connasse</strong>
                </span>
            @enderror

            <button class="btn btn-primary mt-3" type="submit">Add</button>
        </form>
    </div>
@endsection