<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Event's List</title>
    </head>
    <body>
    <h1>Event's List</h1>
    <div id="EventsBox">
        <table>
            <tr>
                <th>Start date</th>
                <th>End date</th>
                <th>City</th>
                <th>Country</th>
                <th>Topic</th>
                <th>Event URL</th>
                
            </tr>
            @foreach ($events as $event)
            <tr>
                <td>{{$event->date_from}}</td>
                <td>{{$event->date_to}}</td>
                <td>{{$event->city}}</td>
                <td>{{$event->country}}</td>
                <td>{{$event->topic}}</td>
                <td>{{$event->event_url}}</td>
                <td>
                    <form method="GET" action="validateEvent">
                        <input class="botonValidar" type="submit" value="Validar">
                    </form> 
                </td>
                <td>
                    <form method="GET" action="event/{{$event->id}}/edit">
                        <input class="botonEditar" type="submit" value="Editar">
                    </form> 
                </td>
            </tr>
            @endforeach
        </table>
    
    </div>
    
    </body>
</html>