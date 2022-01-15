<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vouches extends Model
{
    use HasFactory;

    protected $table = 'vouches';

    protected $fillable = [
        'name',
        'vouch',
        'username'
    ];
}
