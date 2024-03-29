<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class ImageUpload extends Component
{   
    use WithFileUploads;
    /**
     * @var \Livewire\TemporaryUploadFile
     */

    public $image = [];
    
    public function save()
    { 
        $this->validate([
            'image.*' => 'image|max:1024'
        ]);
      
       
        //store
        foreach($this->image as $image){
            // Storage::url("/storage/app/{$image}");
             $image->store('public');

        }
    }

    public function render()
    {
        return view('livewire.image-upload',[
            'images' => collect(Storage::files('public'))
            // ->fillter(function ($file){
            //     return in_array(strtolower(pathinfo($file,)),['png','jpg','jpeg','gif','webp']);
            // })
            ->map(function($file){
               return Storage::url($file);
            })

        ]);
    }
}
