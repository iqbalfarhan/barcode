<?php

namespace App\Livewire\Pages\Unit;

use App\Models\Unit;
use Livewire\Attributes\On;
use Livewire\Component;

class Scan extends Component
{
    public $showInfo = false;
    public ?Unit $information;

    #[On('scanQr')]
    public function scanQr($key)
    {
        $rows = Unit::where('name', $key)->first();

        // dd($key);
        $this->information = $rows;
        $this->showInfo = true;
    }

    public function CloseInfo()
    {
        $this->showInfo = false;
        return redirect()->route('unit.scan');
    }


    public function render()
    {
        return view('livewire.pages.unit.scan');
    }
}
