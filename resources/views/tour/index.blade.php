@extends('layouts.public')

@section('content')

<h1>Tour Index</h1>

@forelse ($events as $event)
    <div class="py-2 border-b">{{ $event->date }} &bull; {{ $event->title }} &bull; {{ $event->location }}</div>
@empty
    <div>No upcoming shows at the moment...</div>
@endforelse

@endsection
