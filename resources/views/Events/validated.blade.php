<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Event</title>
</head>
<body>

<div>
    <h1>Event successfully validated </h1>
    <p>Id: {{$event->id}}</p>
    <p>Status: {{$event->approval_status}}</p>
    <p>Title: {{$event->title}}</p>
    <p>Topic: {{$event->topic}}</p>
    <p>URL: {{$event->event_url}}</p>
    <p>City: {{$event->city}}</p>
    <p>Country: {{$event->country}}</p>
    <a href="/validatedEvents" class="boton">Validated Events</a>
    <a href="/event" class="boton">All Events</a>
</div>

</body>
</html>