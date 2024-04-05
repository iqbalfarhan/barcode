<div class="page-wrapper max-w-lg">
    <div class="card bg-base-100">
        <form class="card-body" wire:submit="simpan">
            <h1 class="card-title">Edit profile</h1>
            <div class="py-4 space-y-2">
                <label class="input input-bordered flex items-center gap-2">
                    <x-tabler-user class="size-5" />
                    <input type="text" wire:model="username" placeholder="Username">
                </label>
                <div class="form-control placeholder">
                    <label class="input input-bordered flex items-center gap-2">
                        <x-tabler-key class="size-5" />
                        <input type="password" wire:model="password" placeholder="Password">
                    </label>
                    <div class="label">
                        <span class="label-text-alt">isi password bila ingin merubah password</span>
                    </div>
                </div>
            </div>
            <div class="card-actions justify-end">
                <button class="btn btn-primary">
                    <x-tabler-check class="size-5" />
                    <span>Simpan</span>
                </button>
            </div>
        </form>
    </div>

</div>
