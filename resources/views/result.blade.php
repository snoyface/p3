<!DOCTYPE html>
<html>
    <head>

    	<title>Developers Best Friend</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>

        </style>

    </head>
    <body>
    	<section>
    		@if(isset($paragraphs))
        	<h1>Your random paragraphs: {{$paragraphs}}</h1>
    		@ifelse(isset($users))
    		<h1>Your random users: {{$users}}</h1>
    		@else
        	<h1>No paragraphs or users!</h1>
    		@endif
		</section>

    </body>

</html>