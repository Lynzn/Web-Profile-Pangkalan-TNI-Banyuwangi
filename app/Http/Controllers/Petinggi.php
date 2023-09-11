<?php

namespace App\Http\Controllers;

use App\Models\Petinggi_Model;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class Petinggi extends Controller
{
    public function index()
    {
        $str   = Str::class;
        $petinggi = Petinggi_Model::orderBy('id', 'desc')->get();
        $datetime = Petinggi_Model::select('publish')->get();
        $current = Carbon::now();
        $dt      = Carbon::yesterday();
        $data = [
            'current' => $current->diffInHours($dt),
        ];

        return view('pages.petinggi', compact('petinggi', 'str', 'data'));
    }

    public function show($slug_petinggi)
    {
        $petinggi = Petinggi_Model::where('slug_petinggi', $slug_petinggi)->first();
        $petinggi_populer = Petinggi_Model::orderBy('id', 'desc')->take(4)->get();

        return view('pages.petinggi_kampus_detail', compact('petinggi', 'petinggi_populer'));
    }
}
