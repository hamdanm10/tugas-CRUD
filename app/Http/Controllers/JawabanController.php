<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JawabanModel;

class JawabanController extends Controller
{
    public function index($id) {
        $pertanyaan = JawabanModel::find_By_Id($id);
        $jawaban = JawabanModel::answers($id);
        return view('jawaban.index', compact('pertanyaan','jawaban'));
    }

    public function store($id, Request $request) {
        $jawaban = JawabanModel::save($request);
        if($jawaban){
            return redirect('/jawaban/'.$id);
        }
    }
}
