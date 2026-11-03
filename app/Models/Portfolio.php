<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $table = 'portfolios';
    protected $primaryKey = 'pelanggan_id';
    protected $fillable = [
        'nama',
        'birthday',
        'gender',
        'email',
        'phone',
        'foto',
    ];

    public $timestamps = false;
}
