<?php

namespace App\Http\Controllers;
// use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class StudyController extends Controller
{
    public function Pelajaran()
    {
        //mau ambil data dari tabel mahasiswa
        $amfibi= Pelajaran::table('amfibi')->get();

        // mengirim ke halaman mahasiswa untuk ditampilkan data
        
        dd($amfibi);
        return view('Pelajaran',[
            'Pelajaran' => $amfibi
        ]);
    }
}
