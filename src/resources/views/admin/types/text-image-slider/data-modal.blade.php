<x-tt::modal.dialog wire:model="displayData">
    <x-slot name="title">{{ $itemId ? "Редактировать" : "Добавить" }} элемент</x-slot>
    <x-slot name="content">
        <form wire:submit.prevent="{{ $itemId ? 'update' : 'store' }}" class="space-y-indent-half"
              id="textImageSliderBlockDataForm-{{ $block->id }}">

            <div>
                <label for="textImageSliderBlockTitle-{{ $block->id }}" class="inline-block mb-2">
                    Заголовок
                </label>
                <input type="text" id="textImageSliderBlockTitle-{{ $block->id }}"
                       class="form-control {{ $errors->has("title") ? "border-danger" : "" }}"
                       wire:loading.attr="disabled"
                       wire:model="title">
                <x-tt::form.error name="title"/>
            </div>

            <div>
                @if ($useMarkdown)
                    <label for="textImageSliderBlockDescription-{{ $block->id }}" class="flex justify-start items-center mb-2">
                        Описание
                        @include("tt::admin.description-button", ["id" => "textImageSliderBlockDescription-{{ $block->id }}-Hidden"])
                    </label>
                    @include("tt::admin.description-info", ["id" => "textImageSliderBlockDescription-{{ $block->id }}-Hidden"])
                @else
                    <label for="textImageSliderBlockDescription-{{ $block->id }}" class="flex justify-start items-center mb-2">
                        Описание
                    </label>
                @endif
                <textarea id="textImageSliderBlockDescription-{{ $block->id }}" class="form-control !min-h-52 {{ $errors->has('description') ? 'border-danger' : '' }}"
                          rows="10"
                          wire:model.live="description">
                        {{ $description }}
                    </textarea>
                <x-tt::form.error name="description" />

                @if ($useMarkdown)
                    <div class="prose prose-sm mt-indent-half">
                        {!! \Illuminate\Support\Str::markdown($description) !!}
                    </div>
                @else
                    <div class="text-info">
                        Ограничение текста <span class="font-semibold">{{ $textConstraint }}</span> символов,
                        сейчас <span class="font-semibold">{{ mb_strlen($description) }}</span> символов
                    </div>
                @endif
            </div>

            <div class="flex items-center space-x-indent-half">
                <button type="button" class="btn btn-outline-dark" wire:click="closeData">
                    Отмена
                </button>
                <button type="submit" form="textImageSliderBlockDataForm-{{ $block->id }}" class="btn btn-primary"
                        wire:loading.attr="disabled">
                    {{ $itemId ? "Обновить" : "Добавить" }}
                </button>
            </div>
        </form>
    </x-slot>
</x-tt::modal.dialog>
