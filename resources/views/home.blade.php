@extends('layout.app')


@section('content')

    <h1>Home</h1>
    <p>this is home page</p>

@endsection


@section('sidebar')

    @parent

    this is appended to sidebar

@endsection