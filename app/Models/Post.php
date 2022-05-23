<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //Memberitahukan field yang harus di isi
    //protected $fillable = ['title', 'excerpt', 'body'];

    //tidak boleh diisi
    protected $guarded =['id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
