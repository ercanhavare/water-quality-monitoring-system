@extends('layouts.master')

@section('content')
    <turtles-component turtlesdata="{{$turtles_data}}" userid="{{\Illuminate\Support\Facades\Auth::user()->id}}"></turtles-component>
@endsection