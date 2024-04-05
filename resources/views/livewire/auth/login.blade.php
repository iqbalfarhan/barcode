<div class="card bg-base-100 max-w-xs">
    <form class="card-body" wire:submit="login">
        <div class="py-4 space-y-2">
            <label for="" class="input input-bordered flex items-center py-3">
                <input type="text" class="grow" wire:model="username" placeholder="Username">
            </label>
            <label for="" class="input input-bordered flex items-center py-3">
                <input type="password" class="grow" wire:model="password" placeholder="Password">
            </label>
        </div>

        <div class="card-actions">
            <button class="btn btn-primary">Login</button>
        </div>
    </form>
</div>
