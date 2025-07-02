<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntryUMKM extends Model
{
    use HasFactory;
    protected $table = 'entryumkm';
    protected $guarded = [];
    protected $casts = [
        'id' => 'string',
    ];
}
