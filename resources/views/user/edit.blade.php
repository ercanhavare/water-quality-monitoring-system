@extends('layouts.master')

@section('content')
    <edit-user-component :user="{{$user}}"></edit-user-component>
@endsection