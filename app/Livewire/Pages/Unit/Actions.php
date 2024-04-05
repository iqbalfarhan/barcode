<?php

namespace App\Livewire\Pages\Unit;

use App\Livewire\Forms\UnitForm;
use App\Models\Unit;
use Livewire\Attributes\On;
use Livewire\Component;

class Actions extends Component
{
    public $show = false;
    public UnitForm $form;

    #[On('createUnit')]
    public function createUnit(){
        $this->show = true;
    }

    #[On('editUnit')]
    public function editUnit(Unit $unit){
        $this->form->setUnit($unit);
        $this->show = true;
    }

    public function simpan(){
        if (isset($this->form->unit)) {
            $this->form->update();
        }
        else{
            $this->form->store();
        }

        $this->dispatch('reload');
        $this->resetForm();
    }

    #[On('deleteUnit')]
    public function deleteUnit(Unit $unit){
        $unit->delete();
        $this->dispatch('reload');
    }

    public function resetForm(){
        $this->form->reset();
        $this->show = false;
    }

    public function render()
    {
        return view('livewire.pages.unit.actions');
    }
}
