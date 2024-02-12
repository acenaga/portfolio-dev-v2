<?php

declare(strict_types=1);

namespace App\Http\Livewire;

use App\Models\WorkExperience;
use App\Models\WorkResponsibility;
use Livewire\Component;

class EditExperience extends Component
{
    public $responsibilities;
    protected $rules = [
        'responsibilities.*.description' => 'required',
    ];
    public $experience = [];
    public $experienceId;
    public $position;
    public $company_name;
    public $description;
    public $url;
    public $start_date;
    public $end_date;
    public $experienceEdited;
    public $responsibilityId;
    public $responsibilityDescription;

    public function mount($experience): void
    {
        $this->position = $experience->position;
        $this->company_name = $experience->company_name;
        $this->description = $experience->description;
        $this->url = $experience->url;
        $this->start_date = $experience->start_date;
        $this->end_date = $experience->end_date;
        $this->experienceId = $experience->id;
        $this->responsibilities = $experience->responsibilities;
    }

    public function render()
    {
        return view('livewire.edit-experience');
    }

    public function editExperience()
    {
        $this->validate([
            'position' => 'required',
            'company_name' => 'required',
            'description' => 'required',
            'url' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        WorkExperience::find($this->experienceId)->update([
            'position' => $this->position,
            'company_name' => $this->company_name,
            'description' => $this->description,
            'url' => $this->url,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
        ]);

        session()->flash('message', 'Experience edit success!');

    }

    public function editResponsibilities()
    {

        $this->validate();

        foreach ($this->responsibilities as $responsibility) {
            $responsibility->save();
        }

        session()->flash('message', 'Responsibilities edited with success!');

    }

    public function deleteResponsibility($id)
    {

        WorkResponsibility::find($id)->delete();

        session()->flash('message', 'Responsibilities delete with success!');

    }

    public function addingResponsibilities($id)
    {
        $this->validate([
            'responsibilityDescription' => 'required',
        ]);

        WorkResponsibility::create([
            'work_experience_id' => $id,
            'description' => $this->responsibilityDescription,
        ]);

        session()->flash('message', 'Responsibilities added with success!');
    }
}
