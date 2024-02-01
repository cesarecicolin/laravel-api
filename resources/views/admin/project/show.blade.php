@extends('layouts.admin')
@section('content')
    <div class="container mt-5">
        <h2>{{$project->title}}</h2>

        <p>{{$project->type?->name}}</p>
        <div>
            <ul>
            @foreach ($project->technologies as $item)
            
                <li>{{$item->name}}</li>
            
                
            @endforeach
            </ul>
        </div>

        <div>
            <img src="{{asset('storage/' .$project->image)}}" alt="">
        </div>

        <div class="mt-4">
            data: {{$project->created_at}}
        </div>

        <div class="mt-4">
            slug: {{$project->slug}}
        </div>
        <p class="mt-4">{{$project->description}}</p>
    </div>
@endsection