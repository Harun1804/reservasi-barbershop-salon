<div class="row">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <img class="d-block mx-auto mt-4" src="{{ url(auth()->user()->mitra->thumbnail) }}" alt="profile picture"
                width="100" />
            <h2 class="fw-bold text-center mt-2">{{ auth()->user()->mitra->nama_mitra }}</h2>
        </div>
    </div>

    @if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if (!$editmode)
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 my-2">
            <label class="h5" for="alamat">Alamat Toko</label>
            <input class="form-control" type="text" name="alamat" id="alamat" wire:model="alamat" disabled />
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 my-2">
            <label class="h5" for="deskripsi">Deskripsi Toko</label>
            <input class="form-control" type="text" name="deskripsi" id="deskripsi" wire:model="deskripsi" disabled />
        </div>
    </div>
    
    <div class="row">
        <div class="col-sm-3 col-md-3 col-lg-3 my-2">
            <button class="btn btn-info" type="button" wire:click="edit"> Edit </button>
        </div>
    </div>
    @else
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 my-2">
            <label class="h5" for="alamat">Alamat Toko</label>
            <input class="form-control" type="text" name="alamat" id="alamat" wire:model="alamat" />
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 my-2">
            <label class="h5" for="deskripsi">Deskripsi Toko</label>
            <input class="form-control" type="text" name="deskripsi" id="deskripsi" wire:model="deskripsi" />
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3 col-md-3 col-lg-3 my-2">
            <button class="btn btn-info" type="button" wire:click="simpan"> Simpan </button>
        </div>
    </div>
    @endif
</div>
