<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\spivrobitnyk_request;
use App\Models\spivrobitnyky;
use App\Models\kafedry;

class spivrobitnyky_controller extends Controller
{
    public function spivrobitnyky(Request $req) {
        $spivrobitnykyModel = new spivrobitnyky();
        $spivrobitnyky = $spivrobitnykyModel->spivrobitnyky();
        $nazva_kafedry = $req->input('nazva_kafedry');
        return view('spivrobitnyky', ['data' => $spivrobitnyky->where('nazva_kafedry', '=', $nazva_kafedry)->all(), 'nazva_kafedry' => $nazva_kafedry]);
    }

    public function spivrobitnyky_add() {
        $kafedry = new kafedry();
        return view('spivrobitnyky_add', ['data' => $kafedry->select(['id_kafedry', 'nazva_kafedry'])->orderBy('nazva_kafedry', 'asc')->get()]);
    }

    public function submit(spivrobitnyk_request $req) {
        $spivrobitnyky = new spivrobitnyky();
        $spivrobitnyky->id_kafedry = $req->input('id_kafedry');
        $spivrobitnyky->prizvyshche = $req->input('prizvyshche');
        $spivrobitnyky->imya = $req->input('imya');
        $spivrobitnyky->pobatkovi = $req->input('pobatkovi');

        $spivrobitnyky->save();
        return redirect('/kafedry_filter');
    }

    public function spivrobitnyky_edit($id_spivrobitnyky) {
        $spivrobitnyky = new spivrobitnyky();
        $kafedry = new kafedry();
        return view('spivrobitnyky_edit', [
            'data' => $spivrobitnyky->where('id_spivrobitnyky', '=', $id_spivrobitnyky)->first(),
            'data2' => $kafedry->select(['id_kafedry', 'nazva_kafedry'])->orderBy('nazva_kafedry', 'asc')->get()]);
    }

    public function spivrobitnyky_edit_submit($id_spivrobitnyky, spivrobitnyk_request $req) {
        $spivrobitnyky = spivrobitnyky::find($id_spivrobitnyky);
        $spivrobitnyky->id_kafedry = $req->input('id_kafedry');
        $spivrobitnyky->prizvyshche = $req->input('prizvyshche');
        $spivrobitnyky->imya = $req->input('imya');
        $spivrobitnyky->pobatkovi = $req->input('pobatkovi');
        $spivrobitnyky->save();
        return redirect('/kafedry_filter');
    }


    public function spivrobitnyky_del_submit($id_spivrobitnyky) {
        spivrobitnyky::find($id_spivrobitnyky)->delete();
        return redirect('/kafedry_filter');
    }
}
