<?php

declare(strict_types=1);

namespace App\Http\Livewire;

use App\Models\Section;
use Livewire\Component;

class SectionPanel extends Component
{
    public Section $model;
    public $field;
    public $isActive;

    public function mount()
    {
        $this->isActive = (bool) $this->model->getAttribute($this->field);
    }

    public function updating($field, $value)
    {
        $this->model->setAttribute($this->field, $value)->save();

    }

    public function render()
    {
        return view('livewire.section-panel');
    }
}
