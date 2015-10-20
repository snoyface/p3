        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Http\Requests;

<!DOCTYPE html>
<html>
    <head>

        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    	<title>Developers Best Friend</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>

        </style>

    </head>
    <body>
    	<section>
    		@if(isset($request))
            implode('<p>', $paragraphs);
        	<h1>Your random paragraphs: {{$paragraphs}}</h1>
    		@ifelse(isset($users))
    		<h1>Your random users: {{$users}}</h1>
    		@else
        	<h1>No paragraphs or users!</h1>
    		@endif
		</section>

    </body>

</html>