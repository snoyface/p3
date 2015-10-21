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

            @if( isset($paragraphs))
              Your submission:
              <br>
              <ul>
              @foreach($paragraphs as $paragraph)
                <li>
                  {{ $paragraph }} 
                  
                </li>
              @endforeach  
              </ul>
    	</div>	
        @endif

@stop
        
    	