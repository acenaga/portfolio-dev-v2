<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CreateExperience extends Component
{
    public $position, $company_name, $description, $url, $start_date, $end_date;

    public function render()
    {
        return view('livewire.create-experience');
    }

    public function create()
    {
        $this->validate([
            'position' => 'required',
            'company_name' => 'required',
            'description' => 'required',
            'url' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);


        $experience = auth()->user()->experiences()->create([
            'position' => $this->position,
            'description' => $this->description,
            'url' => $this->url,
            'company_name' => $this->company_name,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
        ]);

        $this->reset();

        session()->flash('message', 'Experience added with success!');

        //$this->emit('experienceAdded', $experience);
    }
}
