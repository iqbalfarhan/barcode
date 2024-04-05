<div class="navbar bg-base-100 border-b-2 border-base-300">
    <div class="navbar-start">
        <label for="drawer" @class(['btn btn-ghost btn-circle'])>
            <x-tabler-menu-2 class="size-5" />
        </label>
    </div>
    <div class="navbar-center">
        <a class="btn btn-ghost text-xl">{{ config('app.name') }}</a>
    </div>
    <div class="navbar-end">
        <a href="{{ route('unit.scan') }}" class="btn btn-ghost btn-circle">
            <x-tabler-scan class="size-5" />
        </a>
    </div>
</div>
