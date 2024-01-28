<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Menu $menu, Request $request)
    {
        $menu = Menu::latest();
        $data = $request->searcing;

        if ($request->searcing) {
            $menu->where('name', 'like', '%' . $data . '%');
        }
        return view('dashboard.admin.menu.index', [
            'menus' => $menu->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.admin.menu.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Menu $menu)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'slug' => 'required|unique:menus',
            'deskripsi' => 'required|max:255'
        ]);

        $validateData['user_id'] = auth()->user()->id;

        Menu::create($validateData);

        return redirect('/dashboard/menu')->with('toast_success', 'Menu berhasil di buat ');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {
        return view('dashboard.admin.menu.edit', [
            'menu' => $menu
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Menu $menu)
    {

        $edit = [
            'price' => 'required',
            'name' => 'required',
            'deskripsi' => 'required|max:255',
        ];

        if ($request->slug != $menu->slug) {
            $edit['slug'] = 'required|unique:menus';
        }


        $validasi = $request->validate($edit);

        Menu::where('id', $menu->id)->update($validasi);

        return redirect('/dashboard/menu')->with('toast_info', 'menu berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        Menu::destroy('id', $menu->id);
        return redirect('/dashboard/menu')->with('toast_error', 'menu berhasil di hapus');
    }
}
