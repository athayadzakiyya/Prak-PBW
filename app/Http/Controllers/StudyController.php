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
            'Nomor' => $request->Nomor,
            'JENIS' => $request->JENIS
        ]);

        return redirect('/Pelajaran');
    }

    public function edit($id)
    {
        #ambil data berdasarkan id di tabel
        $amfibi = DB::table('amfibi')->where('id', $id)->get();
        // dd($amfibi);
        #passing data
        return view('edit', [
            'Pelajaran' => $amfibi
        ]);
    }

    public function update(Request $request)
    {
        //update data
        $amfibi = DB::table('amfibi')->where('id', $request->id)->update([
            'Nomor' => $request->Nomor,
            'JENIS' => $request->JENIS
        ]);

        return redirect('/Pelajaran');
    }

    public function hapus($id)
    {
        //hapus data
        $amfibi = DB::table('amfibi')->where('id', $id)->delete();
        return redirect('/Pelajaran');
    }
}
