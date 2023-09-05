<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran_model;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class Pendaftaran extends Controller
{
    public function index()
    {
        $str   = Str::class;
        $pendaftaran = Pendaftaran_model::orderBy('id', 'desc')->get();
        $datetime = Pendaftaran_model::select('publish')->get();

        $current = Carbon::now();
        $dt      = Carbon::yesterday();
        $data = [
            'current' => $current->diffInHours($dt),
        ];

        return view('pages.pendaftaran_kampus', compact('pendaftaran', 'str', 'data'));
    }

    public function show($slug_pendaftaran)
    {
        $pendaftaran = Pendaftaran_model::where('slug_pendaftaran', $slug_pendaftaran)->first();
        $pendaftaran_populer = Pendaftaran_model::orderBy('id', 'desc')->take(4)->get();

        return view('pages.pendaftaran_kampus_detail', compact('pendaftaran', 'pendaftaran_populer'));
    }
}
