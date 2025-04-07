<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    @vite('resources/css/variables.css')
    @vite('resources/css/reset.css')
    @vite('resources/css/bodyFont.css')
    @vite('resources/css/welcome.css')
</head>
<body>
    <h1>Start Creating Your Task</h1>
    <a href="{{ route('todo.todoLists')}}">Proceed</a>
</body>
</html>