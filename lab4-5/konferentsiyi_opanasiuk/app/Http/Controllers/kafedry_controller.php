<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\kafedry_request;
use App\Models\kafedry;

class kafedry_controller extends Controller
{
    public function submit(kafedry_request $req) {
        // пункт 19
        //dd($req); // dd - функція виводу

        // пункт 21
        //dd($req->input('nazva_kafedry'));

        // пункт 23 - додаємо валідацію(прибираємо в пункті 30)
        //$validation = $req->validate([
        //    'nazva_kafedry' => 'required|min:5',
        //    'roztashuvannya' => 'required|min:5|max:255'
        //]);
        //dd($req->input('nazva_kafedry'));

        // пункт 41
        $kafedry = new kafedry();
        $kafedry->nazva_kafedry = $req->input('nazva_kafedry');
        $kafedry->roztashuvannya = $req->input('roztashuvannya');
        $kafedry->save();
        return redirect('/');
    }
}
