@extends('layouts.master')

@section('content')
    <create-turtle-component userid = {{\Illuminate\Support\Facades\Auth::user()->id}}></create-turtle-component>
@endsection

