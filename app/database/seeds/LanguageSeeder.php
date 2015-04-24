<?php
use Illuminate\Database\Seeder;

/**
 * Created by PhpStorm.
 * User: Moinkhan
 * Date: 3/22/2015
 * Time: 1:33 PM
 */

class LanguageSeeder extends Seeder {

    public function run()
    {
        DB::table('languages')->delete();
        $english = Language::create([
                'name' => 'english'
        ]);

        $this->command->info($english.' created successfully');
    }

}