@extends('layouts.master')

@section('content')
    <show-turtle-component :turtle_data="{{$turtle}}"></show-turtle-component>
@endsection