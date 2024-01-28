<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Reservasi;

class Table extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function reservasi()
    {
        return $this->hasMany(Reservasi::class);
    }
}
