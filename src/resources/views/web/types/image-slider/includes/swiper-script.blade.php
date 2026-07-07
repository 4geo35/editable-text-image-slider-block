@push("scripts")
    <script type="application/javascript">
        (function () {
            document.addEventListener("DOMContentLoaded", function () {
                const sliderElement = document.getElementById("swiperBlockTextImageSlider-{{ $item->id }}")
                if (sliderElement) { initBlockTextImageSliderSliders{{ $item->id }}(sliderElement); }
            })
        })()

        function initBlockTextImageSliderSliders{{ $item->id }}(sliderElement) {
            let navigationElement = document.getElementById("swiperBlockTextImageSliderNavigation-{{ $item->id }}")
            let prevBtnElement = navigationElement.querySelector(".prev-btn")
            let nextBtnElement = navigationElement.querySelector(".next-btn")
            let paginationElement = sliderElement.querySelector(".swiper-pagination")

            let swiper = new Swiper(sliderElement, {
                loop: true,
                simulateTouch: true,
                spaceBetween: 24,
                slidesPerView: "auto",

                navigation: {
                    nextEl: nextBtnElement,
                    prevEl: prevBtnElement,
                },

                pagination: {
                    el: paginationElement,
                    clickable: true,
                }
            })
        }
    </script>
@endpush
