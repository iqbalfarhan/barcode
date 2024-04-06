<?php

namespace App\Livewire\Pages\Unit;

use App\Models\Unit;
use Livewire\Component;

class Show extends Component
{
    public Unit $unit;

    protected $listeners = ['reload' => '$refresh'];
    public $count = 30;

    public function mount(Unit $unit)
    {
        $this->unit = $unit;
    }

    public function kurang()
    {
        $this->count--;
    }

    public function tambah()
    {
        $this->count++;
    }

    public function render()
    {
        return view('livewire.pages.unit.show');
    }
}
