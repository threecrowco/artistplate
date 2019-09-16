@extends('layouts.public')

@section('content')

    <section class="container lg:mx-auto mx-2">
        <h1>Home Page</h1>
        @foreach ($tour as $date)
            <div>{{ $date->title }}</div>
            <div>{{ $date->date }}</div>
        @endforeach
    </section>

    <section class="bg-black text-white">
        <siema ref="siema" class="siema" :options="options" auto-play >
            <div class="slide p-8 m-2 bg-red-600">
                <p>Slide 1</p>
            </div>
            <div class="slide p-8 m-2 bg-red-600">
                <p>Slide 2</p>
            </div>
            <div class="slide p-8 m-2 bg-red-600">
                <p>Slide 3</p>
            </div>
            <div class="slide p-8 m-2 bg-red-600">
                <p>Slide 4</p>
            </div>
        </siema>
    </section>

@endsection
