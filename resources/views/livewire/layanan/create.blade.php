<div>
    <div class="form-group mb-3">
        <label for="layanan">Layanan</label>
        <input type="text" wire:model="namaModel" class="form-control input-sm"  placeholder="Layanan">
    </div>
    <div class="form-group mb-3">
        <label>Harga Layanan</label>
        <input type="number" class="form-control input-sm" placeholder="Masukan Harga" wire:model="harga">
    </div>
    <button wire:click="store()" class="btn btn-primary mb-3">Masukan</button>
</div>