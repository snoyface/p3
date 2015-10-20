@extends('master')

@section('styles')
  <link rel="stylesheet" href="/css/styles.css">
@stop
@section('content')
    	<div class='question'>
    		<form action="result" method="get">
			 <input type='hidden' name='_token' value='{{ csrf_token() }}'>
             <p>How many users? (99 max) <input type="int" name="users"
             value="{{isset($request['users']) ? $request['users']: 'how many?'}}" /></p>
 			 <p><input type="submit" /></p>
			</form>
            
    	</div>	


@stop

