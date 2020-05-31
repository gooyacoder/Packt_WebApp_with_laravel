@extends('layouts.app')
@section('content')

    <h1>Welcome {{$name}} to Laravel Application Demo</h1>
    <h3>Records : {{$records[0]}}</h3>
    <h4>No of Records : {{count($records)}}</h4>

@endsection