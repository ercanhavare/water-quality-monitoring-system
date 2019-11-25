@extends('layouts.master')

@section('content')
    <show-user-component :user="{{$user}}"></show-user-component>
@endsection