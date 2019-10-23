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
    <h1>The Event has been successfully validated </h1>
    <h2>Event Title: {{$event->title}}</h2>
    <h2>Event status: {{$event->approval_status}}</h2>
    <a href="/event" class="boton">Event's List</a>
</div>

</body>
</html>