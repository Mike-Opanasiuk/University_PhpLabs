<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kafedry extends Model
{
    use HasFactory;
    public $timestamps = FALSE;
    protected $table = 'kafedry';
    protected $primaryKey = 'id_kafedry';
}
