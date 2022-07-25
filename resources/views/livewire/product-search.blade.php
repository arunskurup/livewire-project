<div class="container mx-auto py-6 px-8">
    <div class="mb-4" >
         <input type="text" wire:model.lazy="Search" placeholder="Search For Product">
    </div>
   <table class="table-auto w-full text-left">
    <thead>
        <tr>
            <th class="py-2 px-3 bg-gray-100 border-b-2 text-left">Id</th>
            <th class="py-2 px-3 bg-gray-100 border-b-2 text-left">Image</th>
            <th class="py-2 px-3 bg-gray-100 border-b-2 text-left">Title</th>
            <th class="py-2 px-3 bg-gray-100 border-b-2 text-left">Price</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $item)
            <tr>
                <th class="py-2 px-3 border-b">{{$item->id}}</th>
                <th class="py-2 px-3 border-b"><img src="{{$item->image}}" class="w-16" alt="" srcset=""></th>
                <th class="py-2 px-3 border-b">{{$item->title}}</th>
                <th class="py-2 px-3 border-b">{{$item->price}}</th>
            </tr>
        @endforeach
    </tbody>
   </table>
   {{$products->links()}}
</div>
