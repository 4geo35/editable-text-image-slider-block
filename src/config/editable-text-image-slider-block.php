<?php

return [
    "firstBlockImageOnLeftSide" => false,
    "textConstraint" => env("EDITABLE_TEXT_IMAGE_CONSTRAINT", 400), // Если влепить 0, то будет markdown

    "availableTypes" => [
        "textImageSlider" => [
            "title" => env("EDITABLE_TEXT_IMAGE_SLIDER_TITLE", "Текст со слайдером"),
            "admin" => "etisb-image-slider",
            "render" => "etisb::types.image-slider",
        ],
    ],

    // Components
    "customImageSliderComponent" => null,

    // Templates
    "templates" => [
        "text-image-slider-record" => \GIS\EditableTextImageSliderBlock\Templates\TextImageSlider::class,
        "text-image-slider-record-tablet" => \GIS\EditableTextImageSliderBlock\Templates\TabletTextImageSlider::class,
        "text-image-slider-record-mobile" => \GIS\EditableTextImageSliderBlock\Templates\MobileTextImageSlider::class,
    ],
];
