<?php

namespace App\Http\Livewire;

use App\Models\Tweet;
use Livewire\Component;

class ShowTweets extends Component
{
    public $messege = 'Apenas um teste';

    public function render()
    {   
        //Minimiza várias consultas with('user')
        $tweets = Tweet::with('user')->get();

        return view('livewire.show-tweets', [
            'tweets' => $tweets
        ]);
    }

    public function create()
    {
        Tweet::create([
            'content' => $this->messege,
            'user_id' => 2,
        ]);

        $this->messege = '';
    }
}
