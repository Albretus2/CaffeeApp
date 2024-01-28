<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function table()
    {
        return $this->belongsTo(Table::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
