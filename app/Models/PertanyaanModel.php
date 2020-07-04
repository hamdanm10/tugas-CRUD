<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PertanyaanModel {
    public static function get_all() {
        $pertanyaan = DB::table('pertanyaan')->get();
        return $pertanyaan;
    }

    public static function save($request) {
        $new_pertanyaan = DB::table('pertanyaan')->insert([
                            'judul' => $request['judul'], 
                            'isi' => $request['isi'],
                            'created_at' => Carbon::now()
                            ]);
        return $new_pertanyaan;
    }

    public static function find_By_id($id) {
        $pertanyaan = DB::table('pertanyaan')->where('id', '=', $id)->first();
        return $pertanyaan;
    }

    Public static function update($id, $request) {
        $pertanyaan = DB::table('pertanyaan')
                        ->where('id', $id)
                        ->update([
                            'judul' => $request['judul'],
                            'isi' => $request['isi'],
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ]);
        return $pertanyaan;
    }

    Public static function delete2($id) {
        $delete2 = DB::table('jawaban')
                    ->where('pertanyaan_id', $id)
                    ->delete();
        return $delete2;
    }

    Public static function delete($id) {
        $delete = DB::table('pertanyaan')
                    ->where('id', $id)
                    ->delete();
        return $delete;
    }
}

?>