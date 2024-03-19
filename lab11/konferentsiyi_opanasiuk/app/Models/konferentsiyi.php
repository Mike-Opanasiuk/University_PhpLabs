<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class konferentsiyi extends Model
{
    use HasFactory;
    public $timestamps = FALSE;
    protected $table = 'konferentsiyi';
    protected $primaryKey = 'id_konferentsiyi';

    public function konferentsiyi() {
        $konferentsiyi = DB::table('konferentsiyi')
            ->join('spivrobitnyky', 'konferentsiyi.id_spivrobitnyky', '=', 'spivrobitnyky.id_spivrobitnyky')
            ->select('konferentsiyi.*')
            ->selectRaw('DATE_FORMAT(konferentsiyi.data_pochatku, "%d.%m.%Y") AS data_pochatku_format')
            ->selectRaw('DATE_FORMAT(konferentsiyi.data_zakinchennya, "%d.%m.%Y") AS data_zakinchennya_format')
            ->selectRaw('(konferentsiyi.data_zakinchennya - konferentsiyi.data_pochatku) AS truvalist')
            ->selectRaw('concat(spivrobitnyky.prizvyshche, " ", Left(spivrobitnyky.imya,1), ". ", Left(spivrobitnyky.pobatkovi,1), ".") AS prizvyshche')
            ->get();
        return $konferentsiyi;
    }
}
