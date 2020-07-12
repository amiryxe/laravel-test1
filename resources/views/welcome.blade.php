<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <style>
        body {
            font-family: Nunito;
        }
    </style>

</head>
<body>
<ul>
    @foreach($names as $name)
        <li>
            First Name: {{$name['firstName']}}
            <br/>
            Last Name: {{$name['lastName']}}
            <br/>
            Age: {{$name['age']}}
            <hr>
        </li>
    @endforeach
</ul>
</body>
</html>
