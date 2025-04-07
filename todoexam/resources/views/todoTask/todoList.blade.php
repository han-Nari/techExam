<x-layout>
  <h2 class="todo-title">To do Lists</h2>
  <ul class="bg-items">
      @foreach($items as $item)
        <li class="todo-lists-items">
              <!-- Pass 'href' and 'itemId' to the x-card component -->
              <x-card :href="route('todo.todoId', $item->id)" :itemId="$item->id">
                  <h3 class="item-lists"><i class="fa-solid fa-clipboard"></i>{{ $item->title; }}</h3>
              </x-card>
        </li>
      @endforeach
  </ul>
  {{ $items->links('vendor.pagination.bootstrap-5') }}
 </x-layout>