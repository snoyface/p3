<!DOCTYPE html>
<html>
    <head>
        <title>Developers Best Friend</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>

        </style>

    </head>
    <body>
    	<div class='question'>
    		<form action="result" method="get">
			 <input type='hidden' name='_token' value='{{ csrf_token() }}'>
             <p>How many users? (99 max) <input type="int" name="users" /></p>
 			 <p><input type="submit" /></p>
			</form>
            @if( isset($request))
                You Submitted:
                <br>
                {{ $request['paragraphs']}}
    	</div>	
    </body>

   </html>