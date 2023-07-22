<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use PhpParser\Node\Expr\FuncCall;

class QuranController extends Controller
{

    public function index()
    {
        $response = Http::get('https://equran.id/api/v2/surat');
        return view('equran/index', [
            'response'=>json_decode($response)
        ]);
    }

    public function indexId($id)
    {
        $response = Http::get("https://equran.id/api/surat/$id");
        return view('equran/surat', [
            'response'=>json_decode($response)
        ]);

    }

    // public function indexId2($id)
    // {
    //     $response = Http::get("https://equran.id/api/tafsir/$id");
    //     return view('equran/tafsir', [
    //         'response'=>json_decode($response)
    //     ]);
    // }


        // public function Cari(Request $request)
        // {
        //     $data = $response = Http::get("https://equran.id/api/surat/");

        //     if($request->has('search')){
        //         $data = Quran::where('nama','nomor', 'LIKE', '%' . $request->serach . '%');
        //     } else {
        //         $data = Quran::paginate(5);
        //     }



        // }
}
