@php($imageLeft = config("editable-text-image-slider-block.firstBlockImageOnLeftSide"))
<div class="row">
    <div class="col w-full lg:w-1/2 xl:w-7/12 {{ $imageLeft ? "lg:mr-auto" : "lg:order-last lg:ml-auto" }} mb-indent lg:mb-0">
        <div class="w-full block h-full sm:min-h-[327px] sm:min-h-[388px] md:min-h-[499px] lg:min-h-[325px] xl:min-h-[481px] 2xl:min-h-[590px] p-indent flex items-center justify-center bg-light rounded-base">
            Место для слайдера изображений
        </div>
    </div>
    <div class="col w-full lg:w-1/2 xl:w-5/12">
        <div class="flex h-full flex-col justify-center">
            @if ($item->title)
                <div class="text-xl font-semibold mb-indent-half sm:mb-indent">
                    {{ $item->title }}
                </div>
            @endif
            @if ($item->recordable->description)
                @if (config("editable-text-image-slider-block.textConstraint") > 0)
                    <div class="leading-6">
                        {{ $item->recordable->description }}
                    </div>
                @else
                    <div class="prose max-w-none prose-p:leading-6">
                        {!! $item->recordable->markdown !!}
                    </div>
                @endif
            @endif
        </div>
    </div>
</div>
