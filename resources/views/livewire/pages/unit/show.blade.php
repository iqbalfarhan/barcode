<div class="page-wrapper">
    <div class="card divide-y-2 divide-base-300 print:hidden">
        <div class="card-body py-4">
            {!! DNS1D::getBarcodeSVG($unit->name, 'C128', showCode: false) !!}
        </div>
        <div class="card-body flex-row gap-6 items-center">
            <div class="flex flex-col flex-1 gap-2">
                <div class="card-title font-semibold">{{ $unit->name }}</div>
                <p class="text-sm">{{ $unit->description }}</p>
            </div>
            <div>
                <button class="btn btn-outline btn-success"
                    wire:click="$dispatch('editUnit', {unit:{{ $unit->id }}})">
                    <x-tabler-edit class="size-5" />
                    <span>Edit unit</span>
                </button>
            </div>
        </div>
        <div class="card-body py-4">
            <div class="join">
                <button class="btn btn-sm btn-primary join-item btn-square" wire:click="kurang">
                    <x-tabler-minus class="size-4" />
                </button>
                <input type="text" class="join-item input input-bordered input-sm w-14 text-center"
                    wire:model.live="count" />
                <button class="btn btn-sm btn-primary join-item btn-square" wire:click="tambah">
                    <x-tabler-plus class="size-4" />
                </button>
            </div>
        </div>
    </div>

    @if ($count)
        <div class="space-y-2">
            <div class="text-sm">Barcode unit {{ $unit->name }}</div>
            <div class="grid grid-cols-3 gap-0.5">
                @for ($i = 0; $i < $count; $i++)
                    <div class="card card-compact rounded-none">
                        <div class="card-body items-center justify-center">
                            {!! DNS1D::getBarcodeSVG($unit->name, 'C128', showCode: false) !!}
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    @endif


    @livewire('pages.unit.actions')
</div>
