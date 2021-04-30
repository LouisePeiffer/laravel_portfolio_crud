@extends('layouts.index')

@section('content')
    <h1>Edit About</h1>
    <a href="/admin">Retour</a>
    <div>
        @foreach ($allAbout as $about)
                <div class="section-title">
                    <div class="row">
                    <div class="col-lg-8 pt-4 pt-lg-0 content">
                        <form action="{{route('update.about', $about->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="birthday">Birthday</label>
                                        <input type="text" value="{{$about->birthday}}" class="form-control" id="birthday" name="birthday" placeholder="Birthday">
                                    </div>
                                    <div class="form-group">
                                        <label for="website">Website</label>
                                        <input type="text" value="{{$about->website}}" class="form-control" id="website" name="website" placeholder="Website">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="text" value="{{$about->phone}}" class="form-control" id="phone" name="phone" placeholder="Phone">
                                    </div>
                                    <div class="form-group">
                                        <label for="city">City</label>
                                        <input type="text" value="{{$about->city}}" class="form-control" id="city" name="city" placeholder="City">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="age">Age</label>
                                        <input type="text" value="{{$about->age}}" class="form-control" id="age" name="age" placeholder="Age">
                                    </div>
                                    <div class="form-group">
                                        <label for="degree">Degree</label>
                                        <input type="text" value="{{$about->degree}}" class="form-control" id="degree" name="degree" placeholder="Degree">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" value="{{$about->email}}" class="form-control" id="email" name="email" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label for="freelance">Freelance</label>
                                        <input type="text" value="{{$about->freelance}}" class="form-control" id="freelance" name="freelance" placeholder="Freelance">
                                    </div>
                                </div>
                            </div>
                            
                            <button class="btn btn-primary" type="submit">Modifier</button>
                        </form>
                    </div>
                </div>
        @endforeach
    </div>
@endsection