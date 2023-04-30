<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\WorkExperience;
use App\Models\WorkResponsibility;

class CreateExperience extends Component
{
    public $position;
    public $company_name;
    public $description;
    public $url;
    public $start_date;
    public $end_date;
    public $experienceAdded = '';
    public $responsibilities = [];
    public $responsibilityDescription;
    public $experienceAddedId;

    public function render()
    {
        return view('livewire.create-experience');
    }

    public function createExperience()
    {
        $this->validate([
            'position' => 'required',
            'company_name' => 'required',
            'description' => 'required',
            'url' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        $this->start_date = date('Y', strtotime($this->start_date));

        $this->end_date = date('Y', strtotime($this->end_date));

        $this->experienceAdded = WorkExperience::create([
            'user_id' => auth()->user()->id,
            'position' => $this->position,
            'description' => $this->description,
            'url' => $this->url,
            'company_name' => $this->company_name,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
        ]);

        session()->flash('message', 'Experience added with success!');

        $this->experienceAddedId = $this->experienceAdded->id;

    }

    public function addingResponsibilities()
    {

        $this->validate([
            'responsibilityDescription' => 'required',
        ]);

        WorkResponsibility::create([
            'work_experience_id' => $this->experienceAddedId,
            'description' => $this->responsibilityDescription,
        ]);

        $this->responsibilities[] = $this->responsibilityDescription;

        $this->responsibilityDescription = '';

        session()->flash('message', 'Responsibilities added with success!');

    }
}
