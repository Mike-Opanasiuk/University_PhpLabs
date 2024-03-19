<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class spivrobitnyky extends Model
{
    use HasFactory;
    public $timestamps = FALSE;
    protected $table = 'spivrobitnyky';
    protected $primaryKey = 'id_spivrobitnyky';

    public function spivrobitnyky() {
        $spivrobitnyky = DB::table('spivrobitnyky')
            ->join('kafedry', 'spivrobitnyky.id_kafedry', '=', 'kafedry.id_kafedry')
            ->select('spivrobitnyky.*', 'kafedry.nazva_kafedry')
            ->get();
        return $spivrobitnyky;
    }
}
