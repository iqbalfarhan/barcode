<div class="page-wrapper">
    <div class="card divide-y-2 divide-base-300">
        <div class="card-body">
            {!! DNS1D::getBarcodeSVG($unit->name, 'C128', showCode: false) !!}
        </div>
        <div class="card-body flex-row gap-6 items-center">
            {{-- <div class="avatar">
                <div class="size-fit">
                    {!! DNS2D::getBarcodeSVG($unit->name, 'QRCODE', w: 4, h: 4) !!}
                </div>
            </div> --}}
            <div class="flex flex-col flex-1 gap-2">
                <div class="card-title">{{ $unit->name }}</div>
                <p class="text-sm">
                    {{ $unit->description }}
                    {{ $unit->created_at }}
                </p>
            </div>
            <div>
                <button class="btn btn-outline btn-success"
                    wire:click="$dispatch('editUnit', {unit:{{ $unit->id }}})">
                    <x-tabler-edit class="size-5" />
                    <span>Edit unit</span>
                </button>
            </div>
        </div>
    </div>
    @livewire('pages.unit.actions')
</div>
