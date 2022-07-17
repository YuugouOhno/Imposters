<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('diaries')->insert([
            [
            'id'=>1,
    		'name'=> 'neko',
    		"email"=> "neko@gmail.com"
    		]
    	]);
    }
}
