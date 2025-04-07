<x-layout>
    {{-- Validation Errors --}}
    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li class="error">{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <h2 class="todo-title">Add Task</h2>
    <form class="form" action="{{ route('todo.createTodo')}}" method="POST">
        @csrf
        <label for="title">Title</label>
        <input type="text" id="title" placeholder="Enter Title" name="title" value="{{ old('title') }}">
        <label id="desc">Description</label>
        <textarea placeholder="Description (Optional)" rows="5" name="description">{{ old('description') }}</textarea>
        <label for="date">Date</label>
        <input type="date" id="date" name="due_date" value="{{ old('due_date')}}">
        <div class="flex">
            <input type="submit" class="btn-links" value="Add Task" name="submit">
            <button type="button" class="btn-links btn-back"><a class="" href="{{ route('todo.todoLists')}}">Back</a></button>
        </div>
    </form>
</x-layout>