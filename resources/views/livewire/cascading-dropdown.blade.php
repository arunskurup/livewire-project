<div>
    <div class="flex flex-col gap-6 w-[400px] mx-auto py-16">
        <select wire:model="selectContainer " wire:change="changeContinent">
            <option>Please Select Continent</option>
            @foreach ($Continent as $item)
            <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="flex-relative">
        <select wire:model="selectCountry " >
            <option>Please Select </option>
            @foreach ($Country as $item)
            <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
        </select>
    </div>
</div>
