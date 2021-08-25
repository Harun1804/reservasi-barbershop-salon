<div class="row">
    @if ($editimage)
    <div class="col-sm-12">
        <form wire:submit.prevent="save" class="d-block mx-auto mt-4">
            @if ($image)
                Photo Review
                <img src="{{ $image->temporaryUrl() }}">
            @endif
            <input type="file" wire:model="image" accept="image/*">
            @error('image') <span class="error">{{ $message }}</span> @enderror
            <button type="submit" class="btn btn-info btn-sm">Ubah</button>
        </form>
    </div>
    @else        
        <div class="col-sm-12 col-md-12 col-lg-12">
            <img class="d-block mx-auto mt-4" src="{{ url(auth()->user()->profile) }}" alt="profile picture"
                width="100" />
            <h2 class="fw-bold text-center mt-2">{{ auth()->user()->name }}</h2>
        </div>
        <div class="col-sm-12">
            <button type="button" class="btn btn-sm btn-warning d-block mx-auto mt-4" wire:click="editImage">Edit</button>
        </div>
    @endif
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-3 my-2">
            <p class="h5">Nomor Telepon
                @if ($editnohp)
                <button type="button" class="btn" id="save-telepon" wire:click="changePhone">
                    <i class="bi bi-check-lg"></i>
                </button>
                <input class="form-control" type="number" name="telepon" id="telepon" wire:model="nohp"/>
                @else            
                <button type="button" class="btn" id="edit-telepon" wire:click="editPhone">
                    <i class="bi bi-pencil-square"></i>
                </button>
                <input class="form-control" type="number" name="telepon" id="telepon" wire:model="nohp" disabled/>
                @endif
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-3 my-2">
            <p class="h5">
                Email
                @if ($editemail)
                <button type="click" class="btn" id="save-email" wire:click="changeEmail">
                    <i class="bi bi-check-lg"></i>
                </button>
                <input class="form-control" type="email" name="email" id="email" wire:model="email" />
                @else
                <button type="button" class="btn" id="edit-email" wire:click="editEmail">
                    <i class="bi bi-pencil-square"></i>
                </button>
                <input class="form-control" type="email" name="email" id="email" wire:model="email" disabled />
                @endif
            </p>
        </div>
    </div>

    <div class="col-sm-12 col-md-3 col-lg-3 my-2">
        <p class="h5">
            Password
            @if ($editpassword)
            <button type="button" class="btn" id="save-password" wire:click="changePassword">
                <i class="bi bi-check-lg"></i>
            </button>
            <div class="input-group">
                <input class="form-control" type="password" name="password" id="password" wire:model="password" />
            </div>
            @else                
            <button type="button" class="btn" id="edit-password" wire:click="editPassword">
                <i class="bi bi-pencil-square"></i>
            </button>
            @endif
        </p>
    </div>

</div>
