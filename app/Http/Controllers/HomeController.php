<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function index() {

        $selectData = Siswa::all();

        $selectLikeData = Siswa::whereRaw("kelamin like '%laki%'")->get();
        
        $selectJoin = DB::table('tbl_nilai')
            ->join('data_siswa', 'tbl_nilai.id_siswa', 'data_siswa.id_siswa')
            ->join('data_guru', 'tbl_nilai.id_guru', 'data_guru.id_guru')
            ->join('setup_kelas','tbl_nilai.id_kelas', 'setup_kelas.id_kelas')
            ->join('setup_pelajaran', 'tbl_nilai.id_pelajaran', 'setup_pelajaran.id_pelajaran')
            ->select('*')->get();

        $selectJoinLike = DB::table('tbl_nilai')
            ->join('data_siswa', 'tbl_nilai.id_siswa', 'data_siswa.id_siswa')
            ->join('data_guru', 'tbl_nilai.id_guru', 'data_guru.id_guru')
            ->join('setup_kelas','tbl_nilai.id_kelas', 'setup_kelas.id_kelas')
            ->join('setup_pelajaran', 'tbl_nilai.id_pelajaran', 'setup_pelajaran.id_pelajaran')
            ->select('*')
            ->whereRaw("data_siswa.nama_siswa like '%Adi%'")
            ->get();


        return view('home0291', [
            'select' => $selectData,
            'selectLike' => $selectLikeData,
            'selectJoin' => $selectJoin,
            'selectJoinLike' => $selectJoinLike
        ]);
    }
}
