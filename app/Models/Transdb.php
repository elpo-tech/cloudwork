<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transdb extends Model
{
    use HasFactory;

    public $table = 'trandbs';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'ref',
        'user',
        'uid',
        'phone',
        'email',
        'status',
        'type',
        'amnt',

    ];
}
