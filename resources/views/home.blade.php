@extends('layouts.app')

@section('content')
    <h1>Home</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni eligendi at tempore nemo accusantium, vitae optio deleniti temporibus atque a facilis id ea ducimus molestias eveniet natus distinctio? Impedit, officiis.</p>
@endsection

@section('sidebar')
    @parent
    <p>This is appended to the sidebar</p>
@endsection