@section('results')
@extends('index')
@foreach ($events as $event)
{{ csrf_field() }}
<div class="row">
    <div class="col-xs-1-12">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">{{$event->title}}</h3>
                <div class="row">
                    <h6 class="card-text "> From: {{$event->date_from}}</h6>
                </div>
                <div class="row">
                    <h6 class="card-subtitle text-muted"> City: {{$event->city}}</h6>
                </div>
                <div class="row">
                    <h6 class="card-subtitle text-muted"> From: {{$event->date_from}}</h6>
                </div>
                <div class="row">
                    <h6 class="card-subtitle text-muted"> From: {{$event->date_to}}</h6>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

@endsection
