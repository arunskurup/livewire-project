<?php

namespace App\Http\Livewire;
use App\Models\todo;
use Livewire\Component;

class TodoList extends Component
{
    public $todo;
    public string $todolist;
    public function mount(){
        $this->selectTodos();
    }
    public function render()
    {
        return view('livewire.todo-list');
    }
}
