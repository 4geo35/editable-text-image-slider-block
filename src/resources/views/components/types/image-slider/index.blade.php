@props(["block", "isFullPage" => true])
@if ($block->items->count())
    @if ($block->render_title)
        <x-tt::h2 class="mb-indent-half">{{ $block->render_title }}</x-tt::h2>
    @endif
    <div {{ $attributes->merge(["class" => "flex flex-col gap-indent lg:gap-indent-double"]) }}>
        @foreach($block->items as $index => $item)
            @if ($isFullPage) <x-etisb::types.image-slider.item :$item :$index />
            @else <div></div>
            @endif
        @endforeach
    </div>
@endif
