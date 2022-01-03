@extends('layouts.app')

@section('content')
<div class="container">
    <div>
        <h1>
            CREATE CARS
        </h1>
    </div>
    <div>
        <div>
            <form action="/cars" method="POST">
                @csrf
                <input  type="text" name="founded" palceholder="Enter founded year">
                <input  type="text" name="name" palceholder="Enter name">
                <input  type="text" name="Description" palceholder="Enter description">
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div> <hr>
    </div>
</div>
@endsection

