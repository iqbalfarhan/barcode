<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{

    public $username = "admin";
    public $password = "admin123";

    public function login(){
        $credentials = $this->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $this->Redirect(route('home'), navigate:true);
        }
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
