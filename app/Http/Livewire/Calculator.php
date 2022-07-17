<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Calculator extends Component
{
    public $number1=0;
    public $number2=0;
    public string $action ='+';
    public float $result=0;
    public bool $desable=false;
    public function render()
    {
        return view('livewire.calculator');
    }
}
