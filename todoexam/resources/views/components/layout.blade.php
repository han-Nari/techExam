<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todos</title>
    <!-- Add this in the <head> section of your main layout file -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Foont Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/css/style.css')
    @vite('resources/css/reset.css')
    @vite('resources/css/media.css')
    @vite('resources/css/global.css')
    @vite('resources/css/variables.css')
    @vite('resources/css/bodyFont.css')
    @vite('resources/js/index.js')
</head>
<body id="body">
    <header>
        <div class="logo">
            <button id="btn" class="btn"><span class="bar"><i class="fa-solid fa-bars"></i></span></button>
        </div>
    </header>
    <nav>
        <ul class="layout">
            <li>
                <a href="{{ route('todo.todoLists')}}"><span class="icon"><i class="fa-solid fa-list-check"></i></span>
                    <span class="text">To do Lists</span>
                </a>
            </li>
            <li>
                <a href="{{ route('todo.addTodo')}}"><span class="icon"><i class="fa-solid fa-plus"></i></span>
                    <span class="text">Add Task</span>
                </a>
            </li>
        </ul>
    </nav>

    <main>
        @if(session('success'))
            <p class="success"> 
                {{ session('success') }}
            </p>
        @endif
        @if(session('delete'))
            <p class="del"> 
                {{ session('delete') }}
            </p>
        @endif
        @if(session('update'))
            <p class="update"> 
                {{ session('update') }}
            </p>
        @endif
        {{ $slot }}
    </main>
</body>
</html>