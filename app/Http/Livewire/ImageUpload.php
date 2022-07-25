<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
class ImageUpload extends Component
{   
    use WithFileUploads;

    public $image = [];
    public function render()
    {
        return view('livewire.image-upload');
    }
}
