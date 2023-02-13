<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function getCreatePage()
    {
        return view('Karyawan.create'); // bakal ngereturn view create.blade.php
    }

    public function createKaryawan(Request $request)
    {

        Karyawan::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'umur' => $request->umur,
            'nomor_telepon' => $request->nomor_telepon,
        ]);


        return redirect(route('getKaryawans'));
    }

    public function getKaryawans()
    {

        $karyawans = Karyawan::all();

        return view('Karyawans.index', ['karyawans' => $karyawans]);
    }
    

}