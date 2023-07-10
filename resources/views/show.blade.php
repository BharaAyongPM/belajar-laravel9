<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show</title>
</head>

<body>
    <p>Id :{{$student->id}}</p>
    <p>Name: {{$student ->name}}:</p>
    <p>Scroe:{{$student->score}}</p>
    <br>
    <p>Activities :</p>

    @foreach ($student->activities as $activity)

    <p> {{ $activity->name }}</p><br />
    @endforeach

</html>