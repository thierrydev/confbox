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
    <h1>Edit Event </h1>

    <form id="edit" class='formular' action='/event/{{$event->id}}' method='POST'>
        @csrf
        @method ('PATCH')
        {{-- {{dd ($event)}}; --}}
        {{ csrf_field() }}
        <label>Title</label>
        <input class="campos" type="text" name="title" value="{{$event->title}}">
        <br>
        <label>Topic</label>
        <input class="campos" type="text" name="topic" value="{{$event->topic}}">
        <br>
        <label>Date from</label>
        <input class="campos" type="text" name="date_from" value="{{$event->date_from}}">
        <br>
        <label>Date to</label>
        <input class="campos" type="text" name="date_to" value="{{$event->date_to}}">
        <br>
        <label>City</label>
        <input class="campos" type="text" name="city" value="{{$event->city}}">
        <br>
        <label>County</label>
        <input class="campos" type="text" name="country" value="{{$event->country}}">
        <br>
        <label>Event URL</label>
        <input class="campos" type="text" name="event_url" value="{{$event->event_url}}">
        <br>
        <input type="submit" class="boton" value="Send">
        <br>
        <a href="/validatedEvents" class="boton">Validated Events</a>
        <br>
        <a href="/event" class="boton">All Events</a>
    </form>
</div>

</body>
</html>