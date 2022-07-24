<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Country;
use App\Models\Continent;
class CascadingDropdown extends Component
{   
    public $Continent = [];
    public $countries = [];

    public $selectedContinent;
    public $selectedCountry;
    
    //mount
    public function mount()
    {
      $this->Continent = Continent::all();
    }

   
    public function render()
    {
        return view('livewire.cascading-dropdown');
    }


    public function changeContinent()
    {
        if ($this->selectedContinent !== '-1'){
            
              $this->countries = Country::where('continent_id',$this->selectedContinent)->get();
        }
        
    }

}
