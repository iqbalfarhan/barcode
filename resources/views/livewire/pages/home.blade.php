<div class="page-wrapper">
    <div class="grid md:grid-cols-2 gap-2 md:gap-6">
        {{-- <a href="{{ route('unit.scan') }}" class="card card-compact" wire:navigate> --}}
        <a href="{{ route('unit.scan') }}" class="card card-compact" >
            <div class="card-body flex-row gap-3">
                <div>
                    <div class="avatar placeholder">
                        <div class="bg-neutral text-neutral-content rounded-full w-16">
                            <x-tabler-scan class="size-6" />
                        </div>
                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="card-title">Scan sparepart</div>
                    <p>Scan sparepart unit untuk menampilkan detail unit.</p>
                </div>
            </div>
        </a>
        <a href="{{ route('unit.index') }}" class="card card-compact" wire:navigate>
            <div class="card-body flex-row gap-3">
                <div>
                    <div class="avatar placeholder">
                        <div class="bg-success text-success-content rounded-full w-16">
                            <span class="text-xl">{{ $unit_count }}</span>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="card-title">Unit mesin</div>
                    <p>Daftar unit mesin yang pernah terdaftar di aplikasi.</p>
                </div>
            </div>
        </a>
    </div>
</div>
