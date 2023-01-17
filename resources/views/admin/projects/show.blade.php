@extends('layouts.admin')

@section('content')
    <div class="container">
        <h4 class="text-center text-primary mt-3">
            {{ $project->type ? $project->type->name : 'Nessuna categoria' }}
        </h4>
        <h1 class="text-center mt-3">{{ $project->title }}</h1>
        <div class="d-flex justify-content-between mt-3">
            <h5>{{ $project->created_at }}</h5>
            <p>{{ $project->slug }}</p>
        </div>
        <p class="mt-3">{{ $project->description }}</p>
    </div>
@endsection
