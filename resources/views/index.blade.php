@extends('layouts.main-template')

@section('content')

<h1>Welcome to Laravel vue bootstrap and auth (latest 9)</h1>
    <h2>Bootstrap 5 working!</h2>

    <div class="alert alert-primary" role="alert">
        This is a primary alert—check it out!
      </div>

      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Holy guacamole!</strong> You should check in on some of those fields below.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>  



      <div id="app">
        <example-component age="8sffdf"></example-component>
    </div>

@endsection
