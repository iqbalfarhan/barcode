<?php

namespace App\Livewire\Pages\Unit;

use App\Models\Unit;
use Livewire\Component;

class Index extends Component
{

    protected $listeners = ['reload' => '$refresh'];
    public $no = 1;
    public $search;

    public function render()
    {
        return view('livewire.pages.unit.index', [
            'datas' => Unit::when($this->search, function($q){
                $q->where('name', 'like', '%'.$this->search.'%')
                ->orWhere('description', 'like', '%'.$this->search.'%');
            })->get()
        ]);
    }
}
