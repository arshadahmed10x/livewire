<?php

namespace App\Livewire\Users;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Create extends Component
{

    public $username = '';
    public $takenUsernames = [];

    // public function mount()
    // {
    //     // Initialize taken usernames if needed
    //     $this->takenUsernames = User::pluck('name')->toArray();
    // }

    public function save()
    {
        User::create([
            'name' => $this->username,
        ]);
        $this->username = ''; // Reset input after saving
        session()->flash('users.create', 'User created successfully.');
    }
    public function render()
    {
        return view('livewire.users.create', [
            'takenUsernames' => $this->takenUsernames,
        ]);
    }
}
