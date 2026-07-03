<?php

namespace GIS\EditableTextImageSliderBlock\Livewire\Admin\Types;

use GIS\EditableBlocks\Traits\CheckBlockAuthTrait;
use GIS\EditableBlocks\Traits\EditBlockTrait;
use GIS\EditableBlocks\Traits\PlaceholderBlockTrait;
use GIS\EditableBlocks\Traits\SimpleItemActionsTrait;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithFileUploads;

class TextImageSliderWire extends Component
{
    use WithFileUploads, EditBlockTrait, SimpleItemActionsTrait, CheckBlockAuthTrait, PlaceholderBlockTrait;

    public function rules(): array
    {
        $rules = [
            "title" => ["nullable", "string", "max:255"],
        ];
        $textConstraint = config("editable-text-image-slider-block.textConstraint", 400);
        $useMarkdown = $textConstraint <= 0;
        if (! $useMarkdown) {
            $rules["description"] = ["nullable", "string", "max:{$textConstraint}"];
        }
        return $rules;
    }

    public function validationAttributes(): array
    {
        return [
            "title" => "Заголовок",
            "description" => "Описание"
        ];
    }

    public function render(): View
    {
        $items = $this->block->items()->with("recordable")->orderBy("priority")->get();
        return view("etisb::livewire.admin.types.text-image-slider-wire", compact("items"));
    }
}
