<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p> {{$student ->name}}:</p>
    @foreach ($activities as $activity)

    <p> {{ $activity->name }}</p><br />
    @endforeach

</html>
