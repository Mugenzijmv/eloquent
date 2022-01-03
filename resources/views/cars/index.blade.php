@extends('layouts.app')

@section('content')
<div>
    <div>
        <h1>
            CARS
        </h1>
    </div>
    <div>
        <a href="create">Add new car</a>
    </div>
    <div>
        @foreach ($cars as $car)
        <div>
            <span>Name: {{ $car->name }} </span>
            <h1>Founded: {{ $car->founded}} </h1>
            <p> Description: {{ $car->description }} </p>
        </div> <hr>
        @endforeach
    </div>
</div>
@endsection