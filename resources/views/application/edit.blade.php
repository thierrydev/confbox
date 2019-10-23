@extends('layouts.app')

@section('content')
    
<form action="/application" method="POST">
    @csrf
    <label for="First name">First name
    <input type="text" placeholder="First name" name="firstname" value="{{$application->firstname}}">
    </label>
    <label for="Last name">Last name
        <input type="text" placeholder="Last name" name="lastname" value="{{$application->lastname}}">
    </label>
    <label for="Address">Address
        <input type="text" placeholder="Street Address" name="street_address" value="{{$application->street_address}}">
        <input type="text" placeholder="City" name="city" value="{{$application->city}}">
        <input type="text" placeholder="Country" name="country" value="{{$application->country}}">
        <input type="number" placeholder="Postcode" name="postcode" value="{{$application->postcode}}">
    </label>
    <label for="Email">Email
        <input type="text" placeholder="Email" name="email" value="{{$application->email}}">
    </label>
    <label for="Phone">Phone
        <input type="text" placeholder="Phone Number" name="phone" value="{{$application->phone}}">
    </label>
    <label for="Linkedin Url">Linkedin Url
        <input type="text" placeholder="Linkedin Profile URL" name="linkedin_url" value="{{$application->linkedin_url}}">
    </label>
    <input type="submit" value="Submit">
</form>
@endsection