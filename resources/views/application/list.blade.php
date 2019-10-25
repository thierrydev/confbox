@extends('layouts.app')

@section('content')
    <h1>Events Applications List</h1>
    <table> 
        <tr>
            <th>Event</th>
            <th>Descripción</th>
            <th>Usuario GitHub</th>
            <th>Repositorio GitHub</th>
        </tr>
        @foreach ($applications as $application)
            <tr>
                {{ csrf_field() }}
                <td>{{$application->firstname}}</td>
                <td>{{$application->lastname}}</td>
                <td>{{$application->city}}</td>
                <td>{{$application->country}}</td>
                <td>
                    <form method="GET" action="/application/{{$application->id}}/edit">
                        @csrf
                        <input class="botonLista" type="submit" value="Editar">
                    </form> 
                </td>
                <td>
                    <form action="/application/{{$application->id}}" method="post">
                        @csrf
                        @method('DELETE')
                    <button class="botonLista" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <a type="button" class="btn btn-primary" href="/application/create">Create Application</a>
@endsection