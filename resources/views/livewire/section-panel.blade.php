<div>
    <div>
        <input wire:model.lazy="isActive" class="form-check-input" type="checkbox" role="switch" id="{{ $model->id }}switch" @if($isActive) checked @endif>
        <label class="form-check-label" for="{{ $model->id }}switch">{{ $model->name }}</label>
    </div>
</div>
