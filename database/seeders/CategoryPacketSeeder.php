<?php
namespace Database\Seeders;

use App\Models\Packet_category;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryCitySeeder extends Seeder{
    public function run(): void{
        $category = DB::table('packet_categories')->get();

        foreach($category as $v_category){
            Packet_category::create([
                'id_category_packet' => $v_category->id,
            ]);
        }
    }
}