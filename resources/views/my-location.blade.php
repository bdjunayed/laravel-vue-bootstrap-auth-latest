@extends('layouts.main-template')

@section('content')
      <div id="appMyLocation">
        <my-location></my-location>
    </div>

      <?php
      $ipaddress = $_SERVER['REMOTE_ADDR']
      Echo "Your IP Address is " . $ipaddress;
      ?>
@endsection
