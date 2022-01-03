<?php

namespace App\Http\Controllers;

use App\Models\dosen;
use App\Models\gallery;
use App\Models\profil;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
        $nama = profil::where('nama', 'nama_jurusan')->first();
        $subnama = profil::where('nama', 'sub_nama')->first();
        $tentang = profil::where('nama', 'tentang')->first();
        $prospek = profil::where('nama', 'prospek')->first();
        $sejarah = profil::where('nama', 'sejarah')->first();
        $visi = profil::where('nama', 'visi')->first();
        $misi = profil::where('nama', 'misi')->first();
        return view('index', [
            'nama' => $nama,
            'subnama' => $subnama,
            'tentang' => $tentang,
            'prospek' => $prospek,
            'sejarah' => $sejarah,
            'misi' => $misi,
            'visi' => $visi
        ]);
    }

    public function profildosen(){
        return view('profil', [
            'dosen' => dosen::all()
        ]);
    }

    public function gallery(){
        return view('gallery', [
            'gallery' => gallery::all()
        ]);
    }
}
