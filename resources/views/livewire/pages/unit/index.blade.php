<div class="page-wrapper">
    <div class="flex justify-between items-center">
        <input type="search" class="input input-bordered" wire:model.live='search"' placeholder="Pencarian" />
        <button class="btn btn-primary" wire:click="$dispatch('createUnit')">
            <x-tabler-plus class="size-5" />
            <span class="hidden md:flex">Add Unit</span>
        </button>
    </div>
    <div class="table-wrapper">
        <table class="table">
            <thead>
                <th>No</th>
                <th>Kode Unit</th>
                <th>Description</th>
                <th>Actions</th>
            </thead>
            <tbody>
                @foreach ($datas as $data)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td class="font-mono">{{ $data->name }}</td>
                        <td>{{ Str::words($data->description, 4) }}</td>
                        <td>
                            <div class="flex gap-1">
                                <button class="btn btn-xs btn-square btn-success"
                                    wire:click="$dispatch('editUnit', {'unit' :{{ $data->id }}})">
                                    <x-tabler-edit class="size-4" />
                                </button>
                                <button class="btn btn-xs btn-square btn-error"
                                    wire:click="$dispatch('deleteUnit', {'unit' :{{ $data->id }}})">
                                    <x-tabler-trash class="size-4" />
                                </button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @livewire('pages.unit.actions')
</div>
