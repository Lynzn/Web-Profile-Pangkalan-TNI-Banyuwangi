<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran_Model;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class Pendaftaran extends Controller
{
    public function index()
    {
        $str   = Str::class;
        $pendaftaran = Pendaftaran_Model::orderBy('id', 'desc')->get();
        $datetime = Pendaftaran_Model::select('publish')->get();
        $current = Carbon::now();
        $dt      = Carbon::yesterday();
        $data = [
            'current' => $current->diffInHours($dt),
        ];

        return view('pages.pendaftaran', compact('pendaftaran', 'str', 'data'));
    }

    public function show($slug_pendaftaran)
    {
        $pendaftaran = Pendaftaran_Model::where('slug_pendaftaran', $slug_pendaftaran)->first();
        $pendaftaran_populer = Pendaftaran_Model::orderBy('id', 'desc')->take(4)->get();
        // dd($pendaftaran);
        return view('pages.pendaftaran_detail', compact('pendaftaran', 'pendaftaran_populer'));
    }
}
