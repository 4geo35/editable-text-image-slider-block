@push("styles")
    <style>
        #swiperBlockTextImageSlider-{{ $item->id }} .swiper-pagination {
            bottom: var(--indent-width);
        }
        #swiperBlockTextImageSlider-{{ $item->id }} .swiper-pagination-bullet.swiper-pagination-bullet-active {
            background: rgba(var(--color-primary), 1);
        }
        #swiperBlockTextImageSlider-{{ $item->id }} .swiper-pagination-bullet {
            background: white;
            opacity: 1;
        }
    </style>
@endpush
