@extends('master')

@section('styles')
  <link rel="stylesheet" href="/css/styles.css">
@stop
@section('content')
    	<div class='question'>
    		<form action="users" method="POST">
			 <input type='hidden' name='_token' value='{{ csrf_token() }}'>
             <p>How many users? (99 max)<br> <input type="int" name="users"
             value="{{isset($request['users']) ? $request['users']: 'how many?'}}" /></p>
 			 <p><input type="submit" /></p>
			</form>
            
    	</div>	
        <div class='answer'> 
        @if( isset($fakeData))
             <h2 id='header'> Your submission:</h2>
              <br>
              <ul>
              @foreach($fakeData as $fake)
                <li>
                  {{ $fake }} 
                  
                </li>
              @endforeach  
              </ul>
        <a href={{ URL::previous() }}>Reload</a>
        <br>
        <a href='/'>Back to Start</a>
        </div>  

        @endif


@stop

