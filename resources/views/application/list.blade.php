@extends('layouts.app')

@section('content')
    @foreach ($applications as $application)
        
    @endforeach
    <a type="button" class="btn btn-primary" href="/application/create">Create Application</a>
@endsection