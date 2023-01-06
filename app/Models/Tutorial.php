<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutorial extends Model
{
    use HasFactory;

    protected $table = 'tutorials';
    public $timestamps = true;
    protected $fillable = [
        'id',
        'title',
        'description',
        'status',
        'created_by',
        'updated_by',
    ];
}
