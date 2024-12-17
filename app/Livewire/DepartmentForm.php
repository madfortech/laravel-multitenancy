<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Department;

class DepartmentForm extends Component
{
    public $name = 'keven aaa';
    public $sucess = false;

    public function submit()
    {
        Department::create([
            'name' => $this->name,
           
        ]); 
        $this->sucess->true;
    }



    public function mount($departmentId = null)
    {
        if($departmentId)
        {
            $this->name = Department::findOrFail($departmentId)->name;  
        }
    }


   
    public function render()
    {
        return view('livewire.department-form');
    }
}
