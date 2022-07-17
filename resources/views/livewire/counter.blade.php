<div>
   {{-- increment button --}}
   <button wire:click="increment" >+</button>
   {{-- Data print --}}
   <span>{{$count}}</span>
   {{-- decrement button --}}
   <button wire:click="decrement">-</button>
</div>
