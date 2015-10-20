@extends('master')

@section('styles')
  <link rel="stylesheet" href="/css/styles.css">
@stop
@section('content')
    	<div class='question'>
    		<form action="lorem" method='POST'>
             <input type='hidden' name='_token' value='{{ csrf_token() }}'>
			 <p>How many paragraphs? (99 max) <input type="int" name="paragraphs" 
                value="{{isset($request['paragraphs']) ? $request['paragraphs']: 'how many?'}}" /></p>
 			 <p><input type="submit" /></p>
            </form>

            @if( isset($paragraphs))
              Your submission:
              <br>
              <ul>
              @foreach($paragraphs as $paragraph)
                <li>
                  {{ $paragraph }} 
                  <br>
                </li>
              @endforeach  
              <!-- {{{ implode('<p>', $paragraphs)}}}
 -->
              </ul>
    	</div>	
        @endif

@stop
        
    	