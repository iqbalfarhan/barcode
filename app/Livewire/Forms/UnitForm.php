<?php

namespace App\Livewire\Forms;

use App\Models\Unit;
use Livewire\Attributes\Validate;
use Livewire\Form;

class UnitForm extends Form
{
    public ?Unit $unit;
    public $name;
    public $description;

    public function setUnit(Unit $unit){
        $this->unit = $unit;
        $this->name = $unit->name;
        $this->description = $unit->description;
    }

    public function store(){
        $valid = $this->validate([
            'name' =>'required',
            'description' =>'',
        ]);

        Unit::create($valid);
        $this->reset();
    }

    public function update(){
        $valid = $this->validate([
            'name' =>'required',
            'description' =>'',
        ]);

        $this->unit->update($valid);
        $this->reset();
    }
}
