<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\konferentsiyi;
use App\Models\spivrobitnyky;
use App\Http\Requests\konferentsiyi_request;
use Illuminate\Support\Facades\Auth;

class konferentsiyi_controller extends Controller
{
    public function konferentsiyi(konferentsiyi_request $req) {
        $user = Auth::user();
        if ($user) {
            $konferentsiyiModel = new konferentsiyi();
            $konferentsiyi = $konferentsiyiModel->konferentsiyi();
            $data_pochatku = $req->input('data_pochatku');
            $data_zakinchennya = $req->input('data_zakinchennya');
            return view('konferentsiyi', [
                'data' => $konferentsiyi->where('data_pochatku', '>=', $data_pochatku)
                                        ->where('data_zakinchennya', '<=', $data_zakinchennya)
                                        ->all(),
                'data_pochatku' => $data_pochatku,
                'data_zakinchennya' => $data_zakinchennya
            ]);
        }
        else {
            return view('start');
        }
    }

    public function konferentsiyi_add() {
        $user = Auth::user();
        if ($user) {
            $spivrobitnyky = new spivrobitnyky();
            return view('konferentsiyi_add', ['data' => $spivrobitnyky->select(['id_spivrobitnyky', 'prizvyshche', 'imya'])->orderBy('prizvyshche', 'asc')->get()]);
        }
        else {
            return view('start');
        }
    }

    public function submit(konferentsiyi_request $req) {
        $user = Auth::user();
        if ($user) {
            $konferentsiyi = new konferentsiyi();
            $konferentsiyi->id_spivrobitnyky = $req->input('id_spivrobitnyky');
            $konferentsiyi->nazva_konferentsiyi = $req->input('nazva_konferentsiyi');
            $konferentsiyi->data_pochatku = $req->input('data_pochatku');
            $konferentsiyi->data_zakinchennya = $req->input('data_zakinchennya');

            $konferentsiyi->save();
            return redirect('/konferentsiyi_filter');
        }
        else {
            return view('start');
        }
    }

    public function konferentsiyi_edit($id_konferentsiyi) {
        $user = Auth::user();
        if ($user) {
            $konferentsiyi = new konferentsiyi();
            $spivrobitnyky = new spivrobitnyky();
            return view('konferentsiyi_edit', [
              'data' => $konferentsiyi->where('id_konferentsiyi', '=', $id_konferentsiyi)->first(),
              'data2' => $spivrobitnyky->select(['id_spivrobitnyky', 'prizvyshche', 'imya'])->orderBy('prizvyshche', 'asc')->get()
            ]);
        }
        else {
            return view('start');
        }
    }

    public function konferentsiyi_edit_submit($id_konferentsiyi, konferentsiyi_request $req) {
        $user = Auth::user();
        if ($user) {
            $konferentsiyi = konferentsiyi::find($id_konferentsiyi);
            $konferentsiyi->id_spivrobitnyky = $req->input('id_spivrobitnyky');
            $konferentsiyi->nazva_konferentsiyi = $req->input('nazva_konferentsiyi');
            $konferentsiyi->data_pochatku = $req->input('data_pochatku');
            $konferentsiyi->data_zakinchennya = $req->input('data_zakinchennya');

            $konferentsiyi->save();
            return redirect('/konferentsiyi_filter');
        }
        else {
            return view('start');
        }
    }


    public function konferentsiyi_del_submit($id_konferentsiyi) {
        $user = Auth::user();
        if ($user) {
            konferentsiyi::find($id_konferentsiyi)->delete();
            return redirect('/konferentsiyi_filter');
        }
        else {
            return view('start');
        }
    }
}
