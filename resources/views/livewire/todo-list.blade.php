<div class="flex flex-col w-[300px] mx-auto py-16" >
    <div class="flex gap-4 justify-between">
        <input type="text" wire:model="todoText" wire:keydown.enter="addTodo" placeholder="Type and hit enter" class="flex-1" name="" id="">
        <button class="py-2 px-4 bg-indigo-500 hover:bg-indigo-600 disabled:cursor-not-allowed disable:bg-opacity-90 rounted text-white"
        wire:click="addTodo">Add</button>
    </div>   
   {{-- show --}}
   <div class="py-6">
    @if (count($todos))
    <p class="text-gray-500 text-center"></p>
        
    @endif
    @foreach ($todos as $item)
    <div class="flex gap-4 justify-between items-center py-1">
        <input type="checkbox" wire:change="toggleTodos({{$item->id}})" name="" id="">
        <label class="flex-1">{{$item->todo}}</label>
    </div>
    @endforeach
    
   </div>
</div>
