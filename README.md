### Установка

Добавить в `tailwind.admin.config.js`, созданный в пакете `tailwindcss-theme`.

    "./vendor/4geo35/editable-text-image-slider-block/src/resources/views/livewire/admin/**/*.blade.php",
    "./vendor/4geo35/editable-text-image-slider-block/src/resources/views/admin/**/*.blade.php",

Добавить в `tailwind.config.js`, созданный в пакете `tailwindcss-theme`.

    "./vendor/4geo35/editable-text-image-slider-block/src/resources/views/components/**/*.blade.php",
    "./vendor/4geo35/editable-text-image-slider-block/src/resources/views/web/**/*.blade.php",

Установить слайдер `npm install swiper`

Добавить в `app.js`:

    import Swiper from "swiper/bundle"
    import "swiper/css/bundle"
    window.Swiper = Swiper

Установить lightbox `npm install fslightbox`, добавить в `app.js`:

    import "fslightbox"

#### Views

Сокращение для представлений: `etisb`

#### Config

Название файла: `editable-text-image-slider-block`  
Название типа блока: `textImageSlider`

- `firstBlockImageOnLeftSide` => `false`: первое изображение слева
- `textConstraint` => `env("EDITABLE_TEXT_IMAGE_CONSTRAINT", 400)`: если влепить 0, то будет markdown
