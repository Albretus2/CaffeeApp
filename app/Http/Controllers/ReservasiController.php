<?php

namespace App\Http\Controllers;

use App\Models\Reservasi;
use Illuminate\Http\Request;

class ReservasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Reservasi $reservasi)
    {
        return view('dashboard.admin.reservasi.index', [
            'reservasi' => $reservasi->latest()->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reservasi $reservasi)
    {
        $data = [
            'status' => 'required'
        ];

        $validasi = $request->validate($data);

        Reservasi::where('id', $reservasi->id)->update($validasi);

        return redirect('/dashboard/reservasi')->with('update', 'data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservasi $reservasi, Request $request)
    {
        $reservasi->destroy('id', $reservasi->id);
        return redirect('/dashboard/reservasi')->with('delete', 'reservasi telah di hapus');
    }
}
