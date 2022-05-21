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

}
