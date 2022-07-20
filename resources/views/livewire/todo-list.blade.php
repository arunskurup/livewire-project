<div class="flex flex-col w-[300px] mx-auto py-16" >
    <div class="flex gap-4 justify-between">
        <input type="text" wire:model="todoText" wire:keydown.enter="addTodo" placeholder="Type and hit enter" class="flex-1" name="" id="">
        <button wire:click="addTodo">Add</button>
    </div>   
</div>
