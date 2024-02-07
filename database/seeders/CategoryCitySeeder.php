<?php
namespace Database\Seeders;

use App\Models\Packets;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryCitySeeder extends Seeder{
    public function run(): void{
        $airpots = DB::table('airports')->where('countryName', 'INDONESIA')->get();

        foreach($airpots as $v_airports){
            Packets::create([
                'departure_city' => $v_airports->cityName,
            ]);
        }
    }
}