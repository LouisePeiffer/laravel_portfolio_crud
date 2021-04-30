@extends('layouts.index')

@section('content')
    <h3>Edit contact :</h3>
    <a href="{{route('admin')}}">Retour</a>
    @foreach ($allContacts as $contact)
        <form action="{{route('update.contact', $contact->id)}}" method="POST" class="w-75">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" value="{{$contact->location}}" class="form-control" id="location" name="location" placeholder="location">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" value="{{$contact->email}}" class="form-control" id="email" name="email" placeholder="email">
            </div>
            <div class="form-group">
                <label for="telephone">Telephone</label>
                <input type="text" value="{{$contact->telephone}}" class="form-control" id="telephone" name="telephone" placeholder="telephone">
            </div>
            <div class="form-group">
                <label for="iframe">iFrame</label>
                <input type="text" value="{{$contact->iframe}}" class="form-control" id="iframe" name="iframe" placeholder="iframe">
            </div>
            <button class="btn btn-primary" type="submit">Modifier</button>
        </form>
    @endforeach
@endsection