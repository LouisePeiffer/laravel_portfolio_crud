@extends('layouts.index')

@section('content')
    <a href="/admin">Retour</a>
    <div class="container">
        <h1 class="m-3">Boîte à messages</h1>
        <div class="bg-primary rounded p-3">
            @foreach ($allEmails as $email)
                <div class="m-5 border bg-light rounded shadow-lg">
                        <p class="m-3"><span class="font-weight-bold">Nom : </span>{{$email->name}}</p>
                        <p class="m-3"><span class="font-weight-bold">Email : </span>{{$email->email}}</p>
                        <p class="m-3"><span class="font-weight-bold">Subject : </span>{{$email->subject}}</p>
                        <p class="m-3"><span class="font-weight-bold">Message : </span></p>
                        <div class="m-3">
                            {{$email->message}}
                        </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection