<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Register extends Component
{
    public $takenUsernames = [];
    public function mount(){
        $this->takenUsernames = User::all()->pluck('username')->toArray();
    }


    public function render()
    {
        return view('livewire.register');
    }
}
