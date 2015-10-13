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
    		<form action="/lorem" method="get">
			 <p>How many paragraphs? (99 max) <input type="text" name="paragraphs" /></p>
 			 <p><input type="submit" /></p>
			</form>
    	</div>	
    	
    	<section>
    		@if(isset($paragraphs))
        	<h1>Your random paragraphs: {{$paragraphs}}</h1>
    		@else
        	<h1>No paragraphs set</h1>
    		@endif
		</section>
    </body>

   </html>