<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class JawabanModel {
    public static function answers($id) {
        $jawaban = DB::select('select * from jawaban where pertanyaan_id = ?', [$id]);
        return $jawaban;
    }

    public static function find_By_id($id) {
        $pertanyaan = DB::table('pertanyaan')->where('id', '=', $id)->first();
        return $pertanyaan;
    }

    public static function save($request) {
        $new_jawaban = DB::table('jawaban')->insert([
                            'isi' => $request['isi'],
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                            'pertanyaan_id' => $request['pertanyaan_id']
                            ]);
        return $new_jawaban;
    }
}

?>