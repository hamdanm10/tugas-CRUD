<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;

class PertanyaanController extends Controller
{
    public function index() {
        $pertanyaan = PertanyaanModel::get_all();
        // dd($pertanyaan);
        return view('pertanyaan.index', compact('pertanyaan'));
    }

    public function create() {
        return view('pertanyaan.create');
    }

    public function store(Request $request) {
        $pertanyaan = PertanyaanModel::save($request);
        if($pertanyaan){
            return redirect('/');
        }
    }

    public function edit($id) {
        $pertanyaan = PertanyaanModel::find_By_Id($id);
        return view('pertanyaan.edit', compact('pertanyaan'));
    }

    public function update($id, Request $request) {
        $pertanyaan = PertanyaanModel::update($id, $request->all());
        return redirect('/');
    }

    public function delete($id) {
        $delete2 = PertanyaanModel::delete2($id);
        $delete = PertanyaanModel::delete($id);
        return redirect('/');
    }
}
