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
        <h3 class="title">Fill the input fields</h3>
        @if ($errors->any())
            <p>Please fill all the input fields</p>
        @endif
        <form id="create" class="formular" action="/event" method="POST">
            @csrf
            <label class="inputFields">Event description</label>
            <input class="inputFields" type="text" name="description" value="{{$event->description}}">
            <br>
            <label class="inputFields">From date</label>
            <input class="inputFields" type="date" name="date_from" value="{{$event->date_from}}">
            <br>
            <label class="inputFields">To date</label>
            <input class="inputFields" type="date" name="date_to" value="{{$event->date_to}}">
            <br>
            <label class="inputFields">Organizing company id</label>
            <input class="inputFields" type="number" name="organizing_company_id" value="{{$event->organizing_company_id}}">
            <br>
            <label class="inputFields">City</label>
            <input class="inputFields" type="text" name="city" value="{{$event->city}}">
            <br>
            <label class="inputFields">Country</label>
            <input class="inputFields" type="text" name="country" value="{{$event->country}}">
            <br>
            <label class="inputFields">Event URL</label>
            <input class="inputFields" type="text" name="event_url" value="{{$event->event_url}}">
            <br>
            <label class="inputFields">Topic</label>
            <input class="inputFields" type="text" name="topic" value="{{$event->topic}}">
            <br>
            <div class="button">
            <input class="button" type="submit" value="Submit">
            <a href="/event" type="submit" class="button">List of Events</a>
            </div>
        </form>
    </div>
    
</body>
</html>



