<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    // ---------> LOGIN FUNCTION <------------------------
    public function login()
    {
        return view('auth.login');
    }

    public function loginStore(Request $request)
    {
        $validateData = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ], [
            'email.required' => 'email wajib untuk di isi',
            'password.required' => 'password wajib untuk di isi',
        ]);

        $validateData['password'] = Hash::make($validateData['password']);

        $validateData = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($validateData)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->with('failed', 'login gagal, coba lagi');
    }



    // -------------------> REGISTER FUNCTION <-----------------------------------
    public function sign()
    {
        return view('auth.sign');
    }

    public function signStore(Request $request)
    {
        $data = [
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'alamat' => 'required',
            'phone' => 'required|max:14'
        ];

        $validateData = $request->validate($data);

        $validateData['password'] = Hash::make($validateData['password']);

        User::create($validateData);

        return redirect('/login')->with('success', 'Register telah berhasil, silahkan untuk Login');
    }



    // -----------------------> LOGOUT FUNCTION <-----------------------------
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/home');
    }
}
