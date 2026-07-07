@php($imageLeft = config("editable-text-image-slider-block.firstBlockImageOnLeftSide"))
<div class="row">
    <div class="col w-1/2 {{ $imageLeft ? "lg:mr-auto" : "lg:order-last lg:ml-auto" }}">
        <div class="w-full h-full p-indent flex items-center justify-center bg-light rounded-base">
            Место для слайдера изображений
        </div>
    </div>
    <div class="col w-1/2 space-y-indent-half">
        @if ($item->title)
            <div class="font-semibold text-lg">{{ $item->title }}</div>
        @endif
        @if ($item->recordable->description)
            <div class="prose max-w-none">
                @if (config("editable-text-image-slider-block.textConstraint") > 0)
                    {{ $item->recordable->description }}
                @else
                    {!! $item->recordable->markdown !!}
                @endif
            </div>
        @endif
    </div>
</div>
