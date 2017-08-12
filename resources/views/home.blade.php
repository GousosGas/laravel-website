@extends('layouts.app')

@section('content')
<h1>Home</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore eveniet molestias neque sed suscipit vel? Ab aperiam dolorum, est iusto nesciunt nulla optio perferendis quae quaerat voluptas. Mollitia sapiente, sunt!</p>

@endsection

@section('sidebar')
    @parent
    <p>This is append to the sidebar</p>
    @endsection

