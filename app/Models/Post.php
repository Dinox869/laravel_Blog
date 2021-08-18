<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $will = ['comments', 'author'];

    protected $guarded =[];

    public  function comments(){
        return $this->hasMany( Comment::class);
    }

    public function category(){
        return $this->$this->belongsTo(Category::class);
    }

    public  function author(){
        return $this->belongsTo(User::class,'user_id');
    }
}
