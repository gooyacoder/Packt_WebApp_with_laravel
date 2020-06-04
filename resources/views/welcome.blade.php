@extends('layouts.app')
@section('content')

    <h1>Welcome {{$name}} to Laravel Application Demo</h1>

    @if(count($records) > 0)
    <ol>
        @foreach ($records as $item)
            <li>{{$item}}</li>
        @endforeach
    </ol>
    @else 
        <h1>Records are not available</h1>
    @endif
    @foreach ($data as $key=>$value)
        <h2>{{$key}} has "{{$value}}" as value.</h2>
    @endforeach
    <h1>Square of Numbers:</h1>
    @for ($i = 0; $i < 5; $i++)
        <h5>{{($i + 1) * ($i + 1)}}
    @endfor
    @switch($country)
        @case('Iran')
            <h1>Welcome to Iran!</h1>
            @break
        @case('India')
        <h1>Welcome to India!</h1>
            @break
        @default
        <h1>Please select your country.</h1>
    @endswitch
@endsection