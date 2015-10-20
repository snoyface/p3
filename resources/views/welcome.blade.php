@extends('master')

@section('styles')
  <link rel="stylesheet" href="/css/styles.css">
@stop
@section('content')
        <div class="container">
            <div class="content">
                <div class="title">Developers Best Friend</div>
                <p>Do you want to generate random content?</p><br>
                <a class='button' href="/lorem">Yes</a>

                <p>Do you want to generate random users?</p><br>
                <a class='button' href="/users">Yes</a>


            </div>
        </div>

@stop

