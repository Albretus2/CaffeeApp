<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(User $user, Request $request)
    {
        $user = User::latest();
        $data = $request->searcing;

        if ($request->searcing) {
            $user->where('name', 'like', '%' . $data . '%');
        }

        return view('dashboard.admin.superAdmin.user.index', [
            'user' => $user->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.admin.superAdmin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            'name' => 'required',
            'email' => 'email|required',
            'password' => 'required|min:8',
            'alamat' => 'required',
            'phone' => 'required',
            'role' => 'required'
        ]);

        $validasi['password'] = Hash::make($validasi['password']);


        User::create($validasi);
        return redirect('dashboard/user')->with('toast_success', 'new user has been added');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'email' => 'email|required',
            'alamat' => 'required',
            'phone' => 'required',
            'role' => 'required'
        ]);

        User::where('id', $user->id)->update($validateData);

        return redirect('/dashboard/user')->with('toast_success', 'data user has been update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        User::destroy('id', $user->id);
        return redirect('/dashboard/user')->with('toast_warning', 'user has been deleted');
    }
}
