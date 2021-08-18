<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    use HasFactory;

    protected $fillable = ['content','user_id'];

    //Relacionamento Many to One
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function likes()
    {   
        // Filtra tweets curtidos por usuário autenticado
        //return $this->hasMany(Like::class)->where('user_id', auth()->user()->id);

        //Outra maneira de fazer
        return $this->hasMany(Like::class)
                    ->where(function($query){
                        if(auth()->check()){
                            $query->where('user_id', auth()->user()->id);
                        }
                    });
    }
}
