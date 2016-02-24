<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    // protected $table = 'picturies';
    protected $fillable = ['category_id','name', 'path', 'path_thumb', 'published'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
