<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TodoDetail extends Model
{
    use HasFactory;

    public function todo()
    {
        return $this->belongsTo(Todo::class);
    }
}
