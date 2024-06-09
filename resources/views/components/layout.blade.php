<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Job Board</title>
</head>

<body class="container mx-auto mt-10 max-w-2xl bg-slate-200 text-slate-700">
    {{$slot}}
</body>

</html>