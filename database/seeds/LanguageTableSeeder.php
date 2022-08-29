<?php

use Illuminate\Database\Seeder;

class LanguageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('languages')->insert([
            [
    		'name'=> 'アラビア',
    		"label"=> "ar"
    		],
            [
    		'name'=> 'アゼルバイジャン',
    		"label"=> "az"
    		],
            [
    		'name'=> '中国',
    		"label"=> "zh"
    		],
            [
    		'name'=> 'チェコ',
    		"label"=> "cs"
    		],
            [
    		'name'=> 'オランダ',
    		"label"=> "nl"
    		],
            [
    		'name'=> '英語',
    		"label"=> "en"
    		],
    		[
    		'name'=> 'エスペラント',
    		"label"=> "eo"
    		],
    		[
    		'name'=> 'フィンランド',
    		"label"=> "fi"
    		],
    		[
    		'name'=> 'フランス',
    		"label"=> "fr"
    		],
    		[
    		'name'=> 'ドイツ',
    		"label"=> "de"
    		],
    		[
    		'name'=> '現代ギリシア',
    		"label"=> "el"
    		],
    		[
    		'name'=> 'ヘブライ',
    		"label"=> "he"
    		],
    		[
    		'name'=> 'ヒンディー',
    		"label"=> "hi"
    		],
    		[
    		'name'=> 'イタリア',
    		"label"=> "it"
    		],
    		[
    		'name'=> '日本',
    		"label"=> "ja"
    		],
    		[
    		'name'=> 'キルギス',
    		"label"=> "ky"
    		],
    		[
    		'name'=> '韓国',
    		"label"=> "ko"
    		],
    		[
    		'name'=> 'ラテン',
    		"label"=> "la"
    		],
    		[
    		'name'=> 'ポルトガル',
    		"label"=> "pt"
    		],
    		[
    		'name'=> 'ロシア',
    		"label"=> "ru"
    		],
    		[
    		'name'=> 'スロバキア',
    		"label"=> "sk"
    		],
    		[
    		'name'=> 'スロベニア',
    		"label"=> "sl"
    		],
    		[
    		'name'=> 'タタール',
    		"label"=> "tt"
    		]
    	]);
    }
}
 