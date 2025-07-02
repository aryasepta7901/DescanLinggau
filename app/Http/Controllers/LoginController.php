<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class LoginController extends Controller
{
    /// Login Manual
    public function authenticate(Request $request)
    {
        $credentials = $request->validate(
            [
                'email' => 'required',
                'password' => 'required',

            ],
            [
                'email.required' => 'Email Wajib di Isi',
                'password.required' => 'Password Wajib di Isi',
            ]
        );
        // $findUser = User::where('id', strval($request->nip))->first();
        if (Auth::attempt($credentials)) {
            $findUser = User::where('email', $credentials['email'])->first();
            $url = 'EntryUMKM';
            // if ($findUser && Hash::check($request->password, $findUser->password)) {
            $request->session()->regenerate();
            return redirect()->intended($url);
        }
        // Jika gagal
        return back()->with('loginError', 'Login Gagal!');
    }


    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
