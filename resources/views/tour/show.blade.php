@extends('layouts.public')

@section('content')

<h1>Tour Single</h1>

<div>{{ $event->date }}</div>
<div>{{ $event->venue }}</div>
<div class="text-sm leading-normal py-4 mx-2">{!! $event->description !!}</div>
<video-embed></video-embed>
<div class="p-2 m-2 bg-gray-200 font-bold text-gray-800">
    <social-share share-link="{{ url("/tour/{$event->slug}") }}"
                       share-title="New Show Announced:{{ $event->date }} - {{ $event->title }}"
                       share-text="{{ strip_tags($event->description) }}"
                       share-quote="{{ strip_tags($event->description) }}"
                       share-hashtag="{{ $event->title }}">
    </social-share>
</div>


@endsection
