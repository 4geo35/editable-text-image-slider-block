@props(["item", "index"])
@php($imageLeft = $index % 2 > 0)
@php($imageLeft = config("editable-text-image-slider-block.firstBlockImageOnLeftSide") ? !$imageLeft : $imageLeft)
<div class="row">
    <div class="col w-7/12 {{ $imageLeft ? "lg:mr-auto" : "lg:order-last lg:ml-auto" }}">
        <div id="swiperBlockTextImageSlider-{{ $item->id }}" class="swiper overflow-hidden relative group">
            <div id="swiperBlockTextImageSliderNavigation-{{ $item->id }}">
                <button type="button"
                        class="prev-btn absolute left-0 top-0 bottom-0 hidden group-hover:flex items-center justify-center px-indent-lg z-10 text-white cursor-pointer bg-black/25 hover:bg-black/60 transition-all rounded-r-base rotate-180">
                    <x-tt::ico.arrow-right width="20px" height="69px" />
                </button>
                <button type="button"
                        class="next-btn absolute right-0 top-0 bottom-0 hidden group-hover:flex items-center justify-center px-indent-lg z-10 text-white cursor-pointer bg-black/25 hover:bg-black/60 transition-all rounded-r-base">
                    <x-tt::ico.arrow-right width="20px" height="69px" />
                </button>
            </div>
            <div class="swiper-wrapper">
                @foreach($item->recordable->orderedImages as $image)
                    <div class="swiper-slide">
                        <a href="{{ route('thumb-img', ['template' => 'original', 'filename' => $image->file_name]) }}"
                           data-fslightbox="lightbox-text-image-slider-block-{{ $item->id }}"
                           class="block h-full">
                            <picture>
                                <img
                                    class="h-full object-cover object-center rounded-base"
                                    src="{{ route('thumb-img', ['template' => 'text-image-slider-record', 'filename' => $image->file_name]) }}"
                                    alt="">
                            </picture>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <div class="col w-1/3">
        <div class="flex h-full flex-col justify-center">
            @if ($item->title)
                <div class="text-h3-mobile sm:text-h3 font-semibold mb-indent-half sm:mb-indent">
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
                        {!! $item->recordable->description !!}
                    </div>
                @endif
            @endif
            @includeIf("ebtns::web.render-buttons", ["blockItem" => $item])
        </div>
    </div>
</div>
@include("etisb::web.types.image-slider.includes.swiper-script")
@include("etisb::web.types.image-slider.includes.swiper-styles")
