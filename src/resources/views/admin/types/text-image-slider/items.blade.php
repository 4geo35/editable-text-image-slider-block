<div class="mx-auto w-11/12 mt-indent-half space-y-indent-half" x-collapse x-show="expanded">
    @foreach($items as $item)
        <div class="card">
            <div class="card-header">
                <div class="flex items-center justify-between">
                    @include("eb::admin.types.includes.priority-buttons")
                    @include("eb::admin.types.includes.edit-delete-buttons")
                </div>
            </div>
            <div class="card-body">
                @include("etisb::admin.types.text-image-slider.item")
                @include("eb::admin.types.includes.help-info")
            </div>
            <livewire:fa-images :model="$item->recordable"
                                postfix="GalleryBlock{{ $item->id }}-{{ $item->recordable->id }}"
                                no-card-cover wire:key="{{ $item->id }}--{{ $item->recordable->id }}" />
        </div>
    @endforeach
</div>
