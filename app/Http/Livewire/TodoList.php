<?php

namespace App\Http\Livewire;
use App\Models\todo;
use Livewire\Component;

class TodoList extends Component
{
    public $todos;
    public string $todoText ='';
    public function mount(){
        $this->setTodos();
    }
    public function render()
    {
        return view('livewire.todo-list');
    }
    public function setTodos(){
        $this->todos=todo::orderBy('created_at','DESC')->get();
    }
    public function addTodo(){
        $todo= new todo;
        $todo->todo=$this->todoText;
        $todo->completed= false;
        $todo->save();
        $this->todoText='';
        $this->setTodos();
    }
    public function toggleTodos($id){
        $todo= todo::find($id);
       
        if (!$todo){
            return;
        }
        $todo->completed = !$todo->completed;
        $todo->save();
        $this->setTodos();

    }
    public function deleteTodos($id){
        $todo= todo::find($id)->delete();
        if (!$todo){
            return;
        }
        $this->setTodos();

    }
}
