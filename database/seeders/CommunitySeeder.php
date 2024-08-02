<?php

namespace Database\Seeders;

use App\Models\Community;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommunitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Community::create([
            "name"=> "Game",
            "description"=> "A community to discuss games",
        ]);
        Community::create([
            "name"=> "Movies",
            "description"=> "A community to discuss movies",
        ]);
        Community::create([
            "name"=> "Book",
            "description"=> "A community to discuss books",
        ]);
        Community::create([
            "name"=> "Car",
            "description"=> "A community to discuss cars",
        ]);
        Community::create([
            "name"=> "Travelling",
            "description"=> "A community to discuss travel experiences",
        ]);

        for ($i=0; $i < 20; $i++) {
            # code...
            Community::create([
                "name" => "Dummy Community " . ($i+1),
                "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit...."
            ]);
        }
    }
}
