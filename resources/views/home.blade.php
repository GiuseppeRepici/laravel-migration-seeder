@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>treni</h1>
        @foreach ($trains as $train)
            <h5> {{ $train->azienda}} </h5>
            <h5> {{ $train->data_di_partenza}} </h5>
        @endforeach
    </div>
@endsection