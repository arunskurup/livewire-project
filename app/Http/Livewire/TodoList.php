<?php

namespace App\Http\Livewire;
use App\Models\todo;
use Livewire\Component;

class TodoList extends Component
{
    public $todos;
    public string $todoText;
    public function mount(){
        $this->selectTodos();
    }
    public function render()
    {
        return view('livewire.todo-list');
    }
    public function selectTodos(){
        $this->todos=todo::orderBy('created_at','DESC')->get();
    }
    public function addTodos(){
        $todo= new todo;
        $todo->todo=$this->todoText;
        $todo->completed= false;
        $todo->save();
        $this->todoText='';
        $this->setTodos();
    }
}
