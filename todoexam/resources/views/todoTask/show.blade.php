<x-layout>
    <h2 class="todo-title">To do Details</h2>
    <div class="details">
        <h2>
            <i class="fa-solid fa-clipboard"></i>
            {{ $todo->title }}
        </h2>
        <p>
            <i class="fa-solid fa-chalkboard"></i>
            {{ $todo->description }}
        </p>
        <p>
            <i class="fa-solid fa-calendar-days"></i>
            {{ $todo->due_date }}
        </p>
        <div class="btn-links">
            <button type="button" class="btn-links btn-back"><a class="" href="{{ route('todo.todoLists')}}">Back</a></button>
            <button type="submit" class="btn-links btn-edit"><a href="{{ route('todo.edit', $todo->id) }}">Edit</a></button>
        </div>
    </div>
</x-layout>