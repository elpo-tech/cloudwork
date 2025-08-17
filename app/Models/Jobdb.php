<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobdb extends Model
{
    use HasFactory;

    public $table = 'jobdbs';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'oid',
        'code',
        'title',
        'dead',
        'instruct',
        'user',
        'pay',
        'descr',
        'mode',
        'status',
        'pro',
        'proof',
        'done',
        'com',

    ];

    public function sta()
    {
        return $this->belongsTo(User::class, 'user', 'username');
        // 'user' = foreign key in jobs table
        // 'username' = owner key in users table
    }
}
