<div>
    <div class="flex flex-col gap-6 w-[400px] mx-auto py-16">
        <select wire:model="selectedContinent" wire:change="changeContinent">
            <option value="-1"> Please Select Continent</option>
            @foreach ($Continent as $item)
            <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
        </select>
    
      <div class="flex relative">
          <p wire:loading class="absolute left-0 top-0 right-0 bottom-0 z-10 bg-white bg-opacity-90 py-2 px-3">
            Loading...
          </p>
         <select wire:model="selectedCountry" class="flex-1">
            <option value="-1">Please Select </option>
            @foreach ($countries as $item)
            <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
         </select>
      </div>
    </div>
</div>
