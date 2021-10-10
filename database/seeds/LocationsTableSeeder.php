<?php

use Illuminate\Database\Seeder;
// use Kavist\RajaOngkir\Facades\RajaOngkir;
use App\Province;
use App\City;
// use Kavist\RajaOngkir\RajaOngkir;
use GuzzleHttp\Client;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $daftarProvinsi = RajaOngkir::provinsi()->all();
        // foreach ($daftarProvinsi as $provinceRow) {
        //     Province::create([
        //         'province_id' => $provinceRow['province_id'],
        //         'title' => $provinceRow['province']
        //     ]);
        //     $daftarKota = RajaOngkir::kota()->dariProvinsi($provinceRow['province_id'])->get();
        //     foreach ($daftarKota as $cityRow) {
        //         City::create([
        //             'province_id' => $provinceRow['province_id'],
        //             'city_id' => $cityRow['city_id'],
        //             'title' => $cityRow['city_name']
        //         ]);
        //     }
        // }
        $client = new Client();
        $daftarProvinsi = json_decode(file_get_contents('https://dev.farizdotid.com/api/daerahindonesia/provinsi'), true);
        // $this->client->get
        // $daftarProvinsi = json_encode($daftarProvinsi);
        foreach ($daftarProvinsi as $provinceRow) {
            Province::create([
                'province_id' => $provinceRow['id'],
                'title' => $provinceRow['nama']
            ]);
            // $daftarKota = RajaOngkir::kota()->dariProvinsi($provinceRow['province_id'])->get();
            // foreach ($daftarKota as $cityRow) {
            //     City::create([
            //         'province_id' => $provinceRow['province_id'],
            //         'city_id' => $cityRow['city_id'],
            //         'title' => $cityRow['city_name']
            //     ]);
            // }
        }
    }
}
