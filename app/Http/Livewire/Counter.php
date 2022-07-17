<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 0;
    public function render()
    {
        return view('livewire.counter');
    }
    //increment
    public function increment(){
     //increase count
     $this->count++;
    }
    //decrement
    public function decrement(){
        //decrement
        $this->count--;
        

    }
}
