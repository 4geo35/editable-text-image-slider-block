<?php

namespace GIS\EditableTextImageSliderBlock;

use GIS\EditableBlocks\Traits\ExpandBlocksTrait;
use GIS\EditableTextImageSliderBlock\Livewire\Admin\Types\TextImageSliderWire;
use GIS\Fileable\Traits\ExpandTemplatesTrait;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class EditableTextImageSliderBlockServiceProvider extends ServiceProvider
{
    use ExpandBlocksTrait, ExpandTemplatesTrait;

    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . "/config/editable-text-image-slider-block.php", 'editable-text-image-slider-block');
    }

    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . "/resources/views", "etisb");
        $this->addLivewireComponents();
        $this->expandConfiguration();
    }

    protected function expandConfiguration(): void
    {
        $etisb = app()->config["editable-text-image-slider-block"];
        $this->expandBlocks($etisb);
        $this->expandTemplates($etisb);
    }

    protected function addLivewireComponents(): void
    {
        $component = config("editable-text-image-slider-block.customImageSliderComponent");
        Livewire::component(
            "etisb-image-slider",
            $component ?? TextImageSliderWire::class
        );
    }
}
