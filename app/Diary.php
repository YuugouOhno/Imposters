<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Diary extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'text'
        ];
        
    public function getDiaries($num_of_days=1)
    {
        $diaries = [];
        for ($i = 0; $i < $num_of_days; $i++){
            $diaries1 = $this->inRandomOrder()
                ->limit(1)
                ->get();
            array_push($diaries, $diaries1[0]['text']);
         }
        return $diaries;
    }
}
