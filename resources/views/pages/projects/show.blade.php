@extends('layouts.app')
@section('content')
    <main class="container py-3">
        <h1>{{ $project->name }}</h1>

        <p>{{ $project->description }}</p>

        @if($project->cover_image)
            <img 
            src="{{ asset('/storage/' . $project->cover_image) }}" 
            alt="" 
            class="img-fluid">   
        @endif

        <p>
            <strong>
                {{ $project->type->name }}
            </strong>
        </p>

    </main>
@endsection