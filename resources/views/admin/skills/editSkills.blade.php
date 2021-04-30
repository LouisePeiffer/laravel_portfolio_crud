@extends('layouts.index')

@section('content')
    <h1>Edit Skills</h1>
    <a href="{{route('admin')}}">Retour</a>
    <div class="row">

        @foreach ($allSkills as $skill)
            <form action="{{route('update.skill', $skill->id)}}" method="POST">
                @csrf
                @method('PUT')
                    <div class="form-group m-5">
                        <h3>Skill {{$skill->id}}</h3>
                        <label for="skill">Skill</label>
                        <input type="text" value="{{$skill->skill}}" class="form-control" id="skill" name="skill" placeholder="skill">

                        <label for="percent">Percent</label>
                        <input type="text" value="{{$skill->percent}}" class="form-control" id="percent" name="percent" placeholder="percent">
        
                        
                        
                        <button class="btn btn-primary mt-3" type="submit">Modifier</button>
                    </div>
            </form>
        @endforeach
    </div>
@endsection