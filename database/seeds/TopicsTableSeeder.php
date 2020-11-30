<?php

use App\Models\Models\Topic;
use Illuminate\Database\Seeder;

class TopicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $topic = new Topic();
        $topic->title = 'es aris Topic 1';
        $topic->save();
    }
}
