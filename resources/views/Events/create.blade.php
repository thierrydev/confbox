<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Organizer</title>
</head>
<body>
    <div>
        <h1 class="title">New Event</h1>
        <h3 class="title">Please fill all the input fields below:</h3>
        @if ($errors->any())
            <p>Please fill all the input fields</p>
        @endif
        <form id="create" class="formular" action="/event" method="POST">
            @csrf
            <label>Event description</label>
            <input class="inputFields" type="text" name="description" value="{{$event->description}}">
            <br>
            <label>From date</label>
            <input class="inputFields" type="date" name="date_from" value="{{$event->date_from}}">
            <br>
            <label>To date</label>
            <input class="inputFields" type="date" name="date_to" value="{{$event->date_to}}">
            <br>
            <label>City</label>
            <input class="inputFields" type="text" name="city" value="{{$event->city}}">
            <br>
            <label>Country</label>
            <input class="inputFields" type="text" name="country" value="{{$event->country}}">
            <br>
            <label>Event URL</label>
            <input class="inputFields" type="text" name="event_url" value="{{$event->event_url}}">
            <br>
            <label>Topic</label>
            <input class="inputFields" type="text" name="topic" value="{{$event->topic}}">
            <br>
            <label>Title</label>
            <input class="inputFields" type="text" name="topic" value="{{$event->title}}">
            <br>
            <div class="button">
            <input class="button" type="submit" value="Submit">
            <br>
            <a href="/validatedEvents" class="boton">Validated Events</a>
            <a href="/event" type="submit" class="button">All Events</a>
            </div>
        </form>
    </div>
    
</body>
</html>



