<?php

use Illuminate\Database\Seeder;

class DiaryTableSeeder extends Seeder
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
    		'text'=> '今日は友達とサッカーをしました。',
    		],
    		[
            'id'=>2,
    		'text'=> '今日は友達と野球をしました。',
    		],
    		[
            'id'=>3,
    		'text'=> '今日は友達とバスケをしました。',
    		],
    		[
            'id'=>4,
    		'text'=> '今日は友達とスマブラをしました。',
    		],
    		[
            'id'=>5,
    		'text'=> '今日は友達とポケモンをしました。',
    		],
    		[
            'id'=>6,
    		'text'=> '今日はお母さんとプールに行きました。',
    		],
    		[
            'id'=>7,
    		'text'=> '今日はおじいちゃんの家でスイカを食べました。',
    		],
    		[
            'id'=>8,
    		'text'=> '今日は犬の散歩をしました。',
    		],
    		[
            'id'=>9,
    		'text'=> '今日は学校の宿題をがんばりました。',
    		],
    		[
            'id'=>10,
    		'text'=> '今日は家でテレビを見ました。',
    		],
    	]);
    }
}
