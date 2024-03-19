<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\kafedry_request;
use App\Models\kafedry;

class kafedry_controller extends Controller
{
    public function submit(kafedry_request $req) {
        $kafedry = new kafedry();
        $kafedry->nazva_kafedry = $req->input('nazva_kafedry');
        $kafedry->roztashuvannya = $req->input('roztashuvannya');
        $kafedry->save();
        return redirect('/kafedry');
    }

    public function kafedry() {
        $kafedry = new kafedry();
        // пункт 3
        // dd($kafedry->all());

        // пункт 5
        // return view('kafedry', ['data' => $kafedry->all()]);

        // пункт 15
        return view('kafedry', ['data' => $kafedry->orderBy('nazva_kafedry', 'asc')->get()]);
    }

    public function kafedry_edit($id_kafedry) {
        $kafedry = new kafedry();
        return view('kafedry_edit', ['data' => $kafedry->where('id_kafedry', '=', $id_kafedry)->first()]);
    }

    public function kafedry_edit_submit($id_kafedry, kafedry_request $req) {
      $kafedry = kafedry::find($id_kafedry);
      $kafedry->nazva_kafedry = $req->input('nazva_kafedry');
      $kafedry->roztashuvannya = $req->input('roztashuvannya');
      $kafedry->save();
      return redirect('/kafedry');
    }

    public function kafedry_del_submit($id_kafedry) {
      kafedry::find($id_kafedry)->delete();
      return redirect('/kafedry');
    }
}
