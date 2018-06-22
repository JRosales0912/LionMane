<?php

use Illuminate\Database\Seeder;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tag = new \App\Tags([
            'tag' => 'myFirstTag'
        ]);
        $tag->save();

        
        $tag = new \App\Tags([
            'tag' => 'lists'
        ]);
        $tag->save();

        
        $tag = new \App\Tags([
            'tag' => 'node'
        ]);
        $tag->save();

        
        $tag = new \App\Tags([
            'tag' => 'private'
        ]);
        $tag->save();

        
        $tag = new \App\Tags([
            'tag' => 'public'
        ]);
        $tag->save();

        
        $tag = new \App\Tags([
            'tag' => 'readOnly'
        ]);
        $tag->save();

        
        $tag = new \App\Tags([
            'tag' => 'home'
        ]);
        $tag->save();
    }
}
