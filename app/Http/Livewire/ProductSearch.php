<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;
class ProductSearch extends Component
{

    use WithPagination;

    public static $search = '';
    protected $queryString = ['Search'];

    public function render()
    {
        $query = Product::query();
        if($this->search){
            $query->where('title','like',"%{$this->search}%")
            ->orWhere('title','like',"%{$this->search}%");
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
