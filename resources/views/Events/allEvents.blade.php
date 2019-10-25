<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>All Events</title>
    </head>
    <body>
    <h1>All Events</h1>
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
                    <form method="GET" action="validateEvent/{{$event->id}}">
                        <input class="botonValidar" type="submit" value="Validate">
                    </form> 
                </td>
                <td>
                    <form method="GET" action="event/{{$event->id}}/edit">
                        <input class="botonEditar" type="submit" value="Edit">
                    </form> 
                </td>
            </tr>
            @endforeach
        </table>
    
    </div>
    
    </body>
</html>