<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    use HasFactory;
    // The table associated with the model.
    protected $table = 'submissions';

    // The attributes that are mass assignable.
    protected $fillable = [
        'name',
        'email',
        'message',
    ];

    public $timestamps = true;
}
