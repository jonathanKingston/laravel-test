@extends('layout')

@section('content')
  <h1>Edit test {{ $test->id }}</h1>

  {{ Form::model($test, array('action' => array('testController@update', $test->id), 'method' => 'put')) }}
    <div>{{ Form::label('name', 'Test name') }} {{ Form::text('name') }}</div>
    <div>{{ Form::label('description', 'Description') }} {{ Form::textarea('description') }}</div>
    {{ Form::submit() }}
  {{ Form::close() }}

  {{ link_to_action('testController@index', 'Show all') }}
@endsection
