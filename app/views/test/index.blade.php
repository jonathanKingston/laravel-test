@extends('layout')

@section('content')
  <h1>Tests</h1>

  <table>
    <thead>
      <tr><th>ID</th><th>Name</th><th></th></tr>
    </thead>
    <tbody>
      @foreach ($tests as $test)
        <tr>
          <td>{{ $test->id }}</td>
          <td>{{ $test->name }}</td>
          <td>
            {{ link_to_action('testController@show', 'Show', array($test->id)) }}
            {{ link_to_action('testController@edit', 'Edit', array($test->id)) }}
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>

  {{ link_to_action('testController@create', 'Create link') }}
@endsection