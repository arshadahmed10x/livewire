<?php

namespace App\Livewire\Users;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Create extends Component
{
    public $username = '';
    public $takenUsernames = [];

    public function save()
    {
        $this->validate([
            'username' => 'required|min:3|unique:users,username',
        ]);

        User::create([
            'username' => $this->username,
            'name' => $this->username,
            'email' => $this->username . '@example.com',
            'password' => Hash::make('password'),
        ]);

        session()->flash('users.create', 'User created successfully.');
        
        // The property is cleared on the server...
        $this->username = '';

        // ... and we also dispatch an event to clear the input on the client.
        $this->dispatch('user-saved');
    }

    public function render()
    {
        $this->takenUsernames = User::pluck('name')->toArray();

        return view('livewire.users.create');
    }
}