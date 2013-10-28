@extends('layout')

@section('content')
  <h1>Test {{ $test->id }}</h1>

  <div><strong>Name: </strong> {{ $test->name }}</div>
  <div><strong>Description: </strong> {{ $test->description }}</div>

  {{ Form::model($test, array('action' => array('testController@update', $test->id), 'method' => 'delete')) }}
    {{ Form::submit('Delete') }}
  {{ Form::close() }}

  {{ link_to_action('testController@index', 'Show all') }}
@endsection