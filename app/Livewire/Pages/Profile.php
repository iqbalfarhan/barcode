<?php

namespace App\Livewire\Pages;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Profile extends Component
{
    public User $user;
    public $username;
    public $password;

    public function simpan(){
        $valid = $this->validate([
            'username' => 'required',
            'password' => '',
        ]);

        if ($this->password != null) {
            $valid['password'] = Hash::make($this->password);
        }
        else{
            unset($valid['password']);
        }

        $this->user->update($valid);
        $this->mount();
    }

    public function mount(){
        $user = User::find(auth()->id());

        $this->user = $user;
        $this->username = $user->username;
    }

    public function render()
    {
        return view('livewire.pages.profile');
    }
}
