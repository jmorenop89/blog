<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $table = 'post';

    public $fillable = [
        'title','brief','content',
        'status','slug','category_id'
    ];

    public function category(){
        return $this->belongsTo('App\Category');
    }
}
