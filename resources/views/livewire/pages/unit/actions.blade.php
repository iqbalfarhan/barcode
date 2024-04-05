<div>
    <input type="checkbox" class="modal-toggle" @checked($show) />
    <div class="modal" role="dialog">
        <form class="modal-box max-w-sm" wire:submit="simpan">
            <h3 class="font-bold text-lg">Form data unit</h3>
            <div class="py-4 space-y-2">
                <label class="form-control">
                    <div class="label">
                        <span class="label-text">kode unit</span>
                    </div>
                    <input type="text" placeholder="Type here" class="input input-bordered" wire:model="form.name" />
                </label>
                <label class="form-control">
                    <div class="label">
                        <span class="label-text">Deskripsi unit</span>
                    </div>
                    <textarea placeholder="Type here" class="textarea textarea-bordered" wire:model="form.description"></textarea>
                </label>
            </div>
            <div class="modal-action justify-between">
                <button wire:click="resetForm" class="btn btn-ghost">Close</button>
                <button class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>
