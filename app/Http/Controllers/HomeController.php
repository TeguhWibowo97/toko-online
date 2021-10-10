<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\{Province,City};

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    // public function ujicoba()
    // {
        
    //     $json = json_decode(file_get_contents('https://dev.farizdotid.com/api/daerahindonesia/provinsi'), true);
    //     // return $json['provinsi'];
    //     $arr = $json['provinsi'];
    //     // return $arr;
    //     $angka = 1;
    //     foreach($arr as $arr){
    //         $kota = json_decode(file_get_contents('https://dev.farizdotid.com/api/daerahindonesia/kota?id_provinsi='.$arr['id']), true);
    //         $kota = $kota['kota_kabupaten'];
    //         Province::create([
    //                 'province_id' => $arr['id'],
    //                 'title' => $arr['nama'],
    //             ]);
    //         foreach($kota as $data){
    //             City::create([
    //                 'province_id' => $arr['id'],
    //                 'city_id' => $data['id'],
    //                 'title' => $data['nama'],
    //             ]);
    //         }
    //         // echo $angka.''.$kota;
    //         // 
    //         $angka++;
        //     }
        

    // }
}
