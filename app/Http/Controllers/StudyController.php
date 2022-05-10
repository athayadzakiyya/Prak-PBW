<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class StudyController extends Controller
{
    public function Pelajaran()
    {
        //mau ambil data dari tabel mahasiswa
        $amfibi= DB::table('amfibi')->get();

        // mengirim ke halaman mahasiswa untuk ditampilkan data
        
        // dd($amfibi);
        return view('Pelajaran',[
            'Pelajaran' => $amfibi
        ]);
    }

    public function input()
    {
        return view('inputdata');
    }

    public function store(Request $request)
    {
        //memasukkan data kedalam databse
        DB::table('amfibi')->insert([
            'nomor' => $request->nomor,
            'JENIS' => $request->JENIS
        ]);

        return redirect('/Pelajaran');
    }

    public function edit($id)
    {
        #ambil data mahasiswa berdasarkan nim
        $amfibi = DB::table('amfibi')->where('id', $id)->get();
        // dd($amfibi);
        #passing data
        return view('edit', [
            'Pelajaran' => $amfibi
        ]);
    }

    public function update(Request $request)
    {
        DB::table('amfibi')->where('id', $request->id)->update([
            'nomor' => $request->nomor,
            'JENIS' => $request->JENIS
        ]);

        return redirect('/Pelajaran');
    }

    // public function hapus()
    // {
    //     DB::table('amfibi')->delete();
    //     return redirect('/Pelajaran');
    // }
}
