<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email = '';
    public $password = '';
    public $remember = false;

    protected $rules = [
        'email' => 'required',
        'password' => 'required',
    ];

    /*

    Sometimes it's useful to validate a form field as a user types into it.
    Livewire makes "real-time" validation simple with the $this->validateOnly() method.

    To validate an input field after every update, we can use Livewire's updated hook:

     */
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.login');
    }

    public function login()
    {

        $this->validate();

        // Execution doesn't reach here if validation fails.

        $email = $this->email;
        $password = $this->password;
        if ($user = User::where('username', $email)->where('password',$password)->first()) {
            Auth::login($user, $this->remember);
            return redirect()->route('dashboard');
        } else {
            $this->addError('email', 'Invalid credentials');
        }
    }
}
