<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class JadwalSholatController extends Controller
{
    public function index()
    {
        $response = Http::get('https://api.myquran.com/v1/sholat/kota/semua');
        return view('jadwal-sholat/index', [
            'response'=>json_decode($response)
        ]);
    }
}
