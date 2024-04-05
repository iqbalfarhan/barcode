<div class="card bg-base-100 max-w-sm">
    <form class="card-body" wire:submit="login">
        <h1 class="card-title">{{ config('app.name') }}</h1>
        <div class="py-4 space-y-2">
            <label class="input input-bordered flex items-center gap-2">
                <x-tabler-user class="size-5" />
                <input type="text" wire:model="username" placeholder="Username">
            </label>
            <label class="input input-bordered flex items-center gap-2">
                <x-tabler-key class="size-5" />
                <input type="password" wire:model="password" placeholder="Password">
            </label>
        </div>

        <div class="card-actions">
            <button class="btn btn-primary">
                <x-tabler-login class="size-5" />
                <span>Login</span>
            </button>
        </div>
    </form>
</div>
