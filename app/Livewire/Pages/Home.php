<?php

namespace App\Livewire\Pages;

use App\Models\Unit;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('livewire.pages.home', [
            'unit_count' => Unit::count()
        ]);
    }
}
