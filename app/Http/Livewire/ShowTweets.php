<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowTweets extends Component
{
    public $messege = 'Apenas um teste';

    public function render()
    {
        return view('livewire.show-tweets');
    }
}
