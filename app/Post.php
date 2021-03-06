<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['user_id','image','caption',];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
