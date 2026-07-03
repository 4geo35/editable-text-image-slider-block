@props(["item", "index"])
@php($imageRight = $index % 2 > 0)
@php($imageRight = config("editable-text-image-slider-block.firstBlockImageOnLeftSide") ? $imageRight : ! $imageRight)
<div class="row">
    <div class="col w-1/2">
        Text
    </div>
    <div class="col w-1/2">
        Slider
    </div>
</div>
