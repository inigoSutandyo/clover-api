<?php

namespace Database\Seeders;

use App\Models\Community;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i=0; $i < 20; $i++) {
            $c = Community::inRandomOrder()->first();
            Post::create([
                "name" => "Random Post " . ($i+1),
                "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, molestias animi ad distinctio est aperiam eligendi optio fugit, recusandae sunt officia at illum inventore eaque perferendis dolores ullam hic enim.",
                "user_id" => 1,
                "community_id" => $c->id,
            ]);
        }
    }
}
