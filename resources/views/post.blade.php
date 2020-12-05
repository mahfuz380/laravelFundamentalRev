<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            

            <div class="content">
                <h1>Post Page</h1>
                <h1>{{$id}}</h1>
                <h1>{{$name}}</h1>
                <h1>{{$pass}}</h1>

                
            </div>
        </div>
    </body>
</html>