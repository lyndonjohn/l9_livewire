<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Sslc extends Component
{
    public $anytext;
    public $gender;
    public $favorites = [];
    public $fruit;
    public $counter;

    public function render()
    {
        return view('livewire.sslc');
    }

    public function increment()
    {
        $this->counter++;
    }
}
