<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderdb extends Model
{
    use HasFactory;

    public $table = 'orderdbs';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'code',
        'title',
        'dead',
        'instruct',
        'rqmnt',
        'pay',
        'descr',
        'mode',
        'status',
        'rqmnt',
        'done',
        'com',

    ];
}
