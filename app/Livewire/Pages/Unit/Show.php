<?php

namespace App\Livewire\Pages\Unit;

use App\Models\Unit;
use Livewire\Component;

class Show extends Component
{
    public Unit $unit;

    public function mount(Unit $unit)
    {
        $this->unit = $unit;
    }

    public function render()
    {
        return view('livewire.pages.unit.show');
    }
}
