<?php

namespace App\Livewire\Authentication;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginIndex extends Component
{
    public function render()
    {
        return view('livewire.authentication.login-index')->layout('app-base'); ;
    }

    public $username;
    public $password;
    public $remember;

    protected function rules()
    {
        return [
            'username' => 'required',
            'password' => 'required',
        ];
    }

    protected $messages = [
        'username.required' => 'The Username field is required.',
        'password.required' => 'The Password field is required.',
    ];

    public function login()
    {
        // Validasi data yang dikirim dari formulir login
        $this->validate();

        // Cobalah untuk mengautentikasi pengguna
        if (Auth::attempt(['username' => $this->username, 'password' => $this->password])) {
            // Regenerasi sesi
            Session::regenerate();
            return redirect()->route('dashboard-sales');
        } else {
            session()->flash('login', 'Username atau password salah.');
            return back();
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
