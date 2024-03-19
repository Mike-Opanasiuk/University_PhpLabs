<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\spivrobitnyky;

class spivrobitnyky_controller extends Controller
{
    public function spivrobitnyky(Request $req) {
        $spivrobitnykyModel = new spivrobitnyky();
        $spivrobitnyky = $spivrobitnykyModel->spivrobitnyky();
        $nazva_kafedry = $req->input('nazva_kafedry');
        return view('spivrobitnyky', ['data' => $spivrobitnyky->where('nazva_kafedry', '=', $nazva_kafedry)->all(), 'nazva_kafedry' => $nazva_kafedry]);
    }
}
