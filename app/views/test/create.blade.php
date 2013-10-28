@extends('layout')

@section('content')
  {{ Form::open(array('url' => 'test')) }}
    <div>{{ Form::label('name', 'Test name') }} {{ Form::text('name') }}</div>
    <div>{{ Form::label('description', 'Description') }} {{ Form::textarea('description') }}</div>
    {{ Form::submit() }}
  {{ Form::close() }}
@endsection