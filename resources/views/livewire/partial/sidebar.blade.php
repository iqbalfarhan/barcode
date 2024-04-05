<ul class="menu p-4 w-80 min-h-full bg-base-200 text-base-content" data-theme="dark">
    <li>
        <a href="{{ route('home') }}" @class(['active' => Route::is('home')]) wire:navigate>
            <x-tabler-dashboard class="size-4" />
            <span>Dashboard</span>
        </a>
    </li>
    <li>
        <a href="{{ route('unit.index') }}" @class(['active' => Route::is('unit.index')]) wire:navigate>
            <x-tabler-car class="size-4" />
            <span>Unit terdaftar</span>
        </a>
    </li>
    <li>
        <a href="{{ route('unit.scan') }}" @class(['active' => Route::is('unit.scan')]) wire:navigate>
            <x-tabler-scan class="size-4" />
            <span>Scan barcode</span>
        </a>
    </li>
    <li>
        <button wire:click="logout">
            <x-tabler-logout class="size-4" />
            <span>Keluar aplikasi</span>
        </button>
    </li>
</ul>
