<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
class Register extends Component
{   

    public $name;
    public $email;
    public $password;
    public function render()
    {
        return view('livewire.register');
    }

    public function registerUser() {
        $validated=$this->validate(
            [
                'name'=>'required',
                'email'=>'required|email|unique:users',
                'password'=> 'required|min:8|max:255',
            ]
            );
     $user=User::create([
            'name'=>$this->name,
            'email'=>$this->email,
            'password'=>bcrypt($this->password),
     ]);
    }

}
