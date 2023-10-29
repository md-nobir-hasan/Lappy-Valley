<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Todo')]
class Todo extends Component
{
    public $todo;
    public $todos = [];

    public function mount(){
        $this->todos = ['Nobir', "Nabir"];
    }

    public function add(){
        $this->todos[] = $this->todo;
        $this->todo='';
    }

    public function render()
    {
        return view('livewire.todo');
    }
}
