<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Merch extends Model
{

protected $table = 'merchs';

protected $fillable = 
[
'title', 'genres', 'img', 'user_id'
];


 public function user()
    {
        return $this->belongsTo(User::class);
    }
}
