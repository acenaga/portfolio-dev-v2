<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Models\Section;
use Livewire\Component;

class SectionPanel extends Component
{
    public Section $model;
    public string $field;
    public bool $isActive;

    public function mount()
    {
        $this->isActive = (bool) $this->model->getAttribute($this->field);
    }

    public function updatedIsActive($value)
    {
        $this->model->setAttribute($this->field, $value)->save();

    }

    public function render()
    {
        return view('livewire.section-panel');
    }
}
