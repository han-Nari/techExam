<x-layout>
    {{-- Validation Errors --}}
    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <h2 class="todo-title">Update Details</h2>
    <!-- todoTask.edit.blade.php -->
    <form class="form" action="{{ route('todo.update', $item->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- For update method -->

        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="{{ old('title', $item->title) }}" required>

        <label for="description">Description:</label>
        <textarea name="description" id="description" rows="5" required>{{ old('description', $item->description) }}</textarea>

        <label for="date">Date</label>
        <input type="date" id="date" name="due_date" value="{{ old('due_date', $item->due_date) }}" required>
        <div class="flex">
            <input type="submit" class="btn-links" value="Update" name="submit">
            <button type="button" class="btn-links btn-back"><a class="" href="{{ route('todo.todoLists')}}">Back</a></button>
        </div>
    </form>
</x-layout>