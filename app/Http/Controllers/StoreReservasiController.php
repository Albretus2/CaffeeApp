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

        $rules = [
            'date' => 'date|required',
            'time' => 'required',
        ];
        if ($request->table_id == $table->where('id', $table->id)) {
            return redirect('/home')->with('toast_error', 'meja sudah terisi');
        } else {
            $rules['table_id'] = 'required';
        }
        $validateData = $request->validate($rules);

        $validateData['user_id'] = auth()->user()->id;



        Reservasi::create($validateData);

        return redirect('/dashboard');
    }
}
