<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Validated Events</title>
    </head>
    <body>
    <h1>Validated Events</h1>
    <a href="/event" class="boton">All Events</a>
    <br>
    <div id="EventsBox">
        <table>
            <tr>
                <th>Start date</th>
                <th>End date</th>
                <th>City</th>
                <th>Country</th>
                <th>Topic</th>
                <th>Event URL</th>
                <th>Status</th>
                
            </tr>
            @foreach ($events as $event)
            <tr>
                <td>{{$event->date_from}}</td>
                <td>{{$event->date_to}}</td>
                <td>{{$event->city}}</td>
                <td>{{$event->country}}</td>
                <td>{{$event->topic}}</td>
                <td>{{$event->event_url}}</td>
                <td>{{$event->approval_status}}</td>
                <td>
                    <form method="GET" action="event/{{$event->id}}/edit">
                        <input class="botonEditar" type="submit" value="Edit">
                    </form> 
                </td>
                <td>
                    <form method="POST" action="event/{{$event->id}}/application">
                        <input type="hidden" name="event_id" value="{{$evento->id}}">
                        <input class="botonEditar" type="submit" value="Edit">
                    </form> 
                </td>
            </tr>
            @endforeach
        </table>
    
    </div>
    
    </body>
</html>