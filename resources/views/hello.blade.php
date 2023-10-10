<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Blade</title>
</head>
<body>
    {{-- Contoh Blade--}}
    {{ date('Y') }}
    <br />
    {{ 3+7 }}
    <br />

    {{"<h3> Hello Laravel </h3>"}}
    {!!"<h3> Hello Laravel </h3>"}
    <?= "<h3> Hello Laravel </h3>" ?>

    @php
    $message = "hello Laravel";
    @endphp
    <h2>{{$message}}</h2>

</body>
</html>