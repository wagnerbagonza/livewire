<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    use HasFactory;

    protected $fillable = ['content'];

    //Relacionamento Many to One
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
