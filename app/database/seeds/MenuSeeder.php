<?php
/**
 * Created by PhpStorm.
 * User: Moinkhan
 * Date: 3/22/2015
 * Time: 1:53 PM
 */

class MenuSeeder extends Seeder
{

    public function run()
    {
        DB::table('translations')->where('type','MENUS')->delete();
        $home = Translation::create([
            'content' =>'Home',
            'type' => 'MENUS',
            'language_id' => Language::english(),
            'token' => rand()
        ]);

        $this->command->info($home." Created Successfully");
    }
}