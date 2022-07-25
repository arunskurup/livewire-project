<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;
class ProductSearch extends Component
{

    use WithPagination;

    
    public string $Search = '';
    protected $queryString = ['Search'];

    public function render()
    {
        $query = Product::query();
        if($this->Search){
            $query->where('title','like',"%{$this->Search}%")
            ->orWhere('title','like',"%{$this->Search}%");
        }
        return view('livewire.product-search',['products' => $query->paginate(20)]);
        
    }
    public function updated($property)
    {
      if($property == 'Search'){
        $this->resetPage();
      }
    }
}    
