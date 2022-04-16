<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class CreateUserForm extends Component
{
    public $name;
    public $email;
    public $password;
    public $password_confirmation;
    public $gender;
    public $cars = [];

    protected $rules = [
        'name' => 'required|max:255',
        'email' => 'required|max:255|email',
        'password' => 'required|min:8|max:72|confirmed',
        'gender' => 'required|in:Male,Female',
        'cars' => 'required|array|in:honda,toyota,nissan'
    ];

    public function render()
    {
        return view('livewire.create-user-form');
    }

    public function submitForm()
    {
        $this->validate();

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'gender' => $this->gender,
            'cars' => json_encode($this->cars)
        ]);

        $this->dispatchBrowserEvent('swal:modal', [
            'icon' => 'success',
            'title' => 'User successfully created'
        ]);

        $this->reset();
    }
}
