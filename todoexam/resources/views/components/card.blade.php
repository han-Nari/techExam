<div class="cards">
    <div class="checkbox">
        <input type="checkbox" id="{{$itemId}}">
        <span class="check" id="{{$itemId}}"><i class="fa-solid fa-check"></i></span>
        <label class="box" for="{{$itemId}}">{{ $slot}}</label>
    </div>
    <div class="btn-items">
        <button class="btn-details"><a {{ $attributes }}><i class="fa-solid fa-eye"></i></a></button>
        <form action="{{ route('todo.delete', $itemId)}}" method="POST">
            @csrf 
            @method('DELETE')
            <button type="submit" class="btn-delete"><i class="fa-solid fa-trash"></i></button>
        </form>
    </div>
</div>