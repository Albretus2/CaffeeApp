<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservasi;
use App\Models\Table;
use Illuminate\Validation\Rules\Unique;

class StoreReservasiController extends Controller
{
    public function store(Request $request, Reservasi $reservasi, Table $table)
    {
        $validateData = $request->validate([
            'date' => 'date|required',
            'time' => 'required',
        ]);
        $validateData['user_id'] = auth()->user()->id;

        if (request('tabel_id') == $table->id) {
            return redirect('/home')->with('toast_error', 'meja sudah terisi');
        }

        Reservasi::create($validateData);

        return redirect('/dashboard');
    }
}
