<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use App\Models\Locality;

class LocalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //Empty the table first
         Locality::truncate();
        
         //Define data
        $localities = [
             ['locality'=>'country'],
             ['locality'=>'city'],
            
         ];
         
         //Insert data in the table
         DB::table('localities')->insert($localities);
    }
}
