<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Event list</title>
    </head>
    <body>
    <h1>Edit events</h1>
    <div id="EventsBox">
        <table>
            <tr>
                <th>Description</th>
                <th>Start date</th>
                <th>End date</th>
                <th>Organizer company</th>
                <th>City</th>
                <th>Country</th>
                <th>Event URL</th>
                <th>Topic</th>
            </tr>
            @foreach ($events as $event)
            <tr>
                <td>{{$event->description}}</td>
                <td>{{$event->date_from}}</td>
                <td>{{$event->date_to}}</td>
                <td>{{$event->organizing_company_id}}</td>
                <td>{{$event->city}}</td>
                <td>{{$event->country}}</td>
                <td>{{$event->event_url}}</td>
                <td>{{$event->topic}}</td>
                <td>
                    <form method="GET" action="/event/{{$event->id}}/edit">
                        <input class="botonEditar" type="submit" value="Editar">
                    </form> 
                </td>
            </tr>
            @endforeach
        </table>
    
    </div>
    
    </body>
</html>