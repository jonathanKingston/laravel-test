@extends('layout')

<h1>Create a test</h1>
@section('content')
  {{ Form::open(array('url' => 'test')) }}
    <div>{{ Form::label('name', 'Test name') }} {{ Form::text('name') }}</div>
    <div>{{ Form::label('description', 'Description') }} {{ Form::textarea('description') }}</div>
    {{ Form::submit() }}
  {{ Form::close() }}
@endsection