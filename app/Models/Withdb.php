<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Withdb extends Model
{
    use HasFactory;

    public $table = 'withdbs';

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
