<?php

namespace App\Livewire\Pages\Unit;

use App\Models\Unit;
use Livewire\Component;

class Index extends Component
{

    protected $listeners = ['reload' => '$refresh'];
    public $no = 1;

    public function render()
    {
        return view('livewire.pages.unit.index', [
            'datas' => Unit::get()
        ]);
    }
}
