@extends('master')

@section('styles')
  <link rel="stylesheet" href="/css/styles.css">
@stop
@section('content')

<!--added form for user question -->
    	<div class='question'>
    		<form action="lorem" method='POST'>
             <input type='hidden' name='_token' value='{{ csrf_token() }}'>
			 <p>How many paragraphs? (99 max)<br> <input type="int" name="paragraphs" 
                value="{{isset($request['paragraphs']) ? $request['paragraphs']: 'how many?'}}" /></p>
 			 <p><input type="submit" /></p>
            </form>
      </div> 

      <div class='answer'>
            @if( isset($paragraphs))
             <h2 id='header'> Your submission:</h2>
              <br>
              <ul id='usersub'>
              @foreach($paragraphs as $paragraph)
                <li>
                  {{ $paragraph }} 
                  
                </li>
              @endforeach  
              </ul>
              <a href={{ URL::previous() }}>Reload</a>
              <br>
              <a href='/'>Back to Start</a>
      </div>

    	
        @endif

@stop
        
    	