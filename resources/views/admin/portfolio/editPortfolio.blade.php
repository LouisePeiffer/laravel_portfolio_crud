@extends('layouts.index')

@section('content')
    <h1>Edit Porfotlio</h1>
    <a href="/admin">Retour</a>
    <a href="{{route('admin')}}">Retour</a>
    <div class="row">
            <form action="{{route('update.portfolio', $portfolio->id)}}" method="POST">
                @csrf
                @method('PUT')
                    <div class="form-group m-5">
                        <h3>Image {{$portfolio->id}}</h3>
                        <label for="image">Image</label>
                        <input type="text" value="{{$portfolio->image}}" class="form-control" id="image" name="image" placeholder="image">

                        <label for="filter">Filter</label>
                        <input type="text" value="{{$portfolio->filter}}" class="form-control" id="filter" name="filter" placeholder="filter">
                        
                        <button class="btn btn-primary mt-3" type="submit">Modifier</button>
                    </div>
            </form>
    </div>
@endsection