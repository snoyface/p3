<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Developers Best Friend</title>
        
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }

            .button {
                font-size: 60px;
                border-bottom-color: red;
            }
        </style>

    </head>
    <body>
    	<div class='question'>
    		<form action="lorem" method='POST'>
             <input type='hidden' name='_token' value='{{ csrf_token() }}'>
			 <p>How many paragraphs? (99 max) <input type="int" name="paragraphs" 
                value="{{isset($request['paragraphs']) ? $request['paragraphs']: 'how many?'}}" /></p>
 			 <p><input type="submit" /></p>
            </form>
    	</div>	
        
    	
    </body>

   </html>