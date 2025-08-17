<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accdb extends Model
{
    use HasFactory;

    public $table = 'accdbs';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'uid',
        'user',
        'email',
        'phone',
        'country',
        'earn',
        'bal',
        'with',

    ];


    public function user()
    {
        return $this->belongsTo(User::class, 'uid', 'id');
        // Earn.uid → foreign key
        // User.id  → owner key
    }
}
