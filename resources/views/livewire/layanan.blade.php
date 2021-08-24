<div class="row my-3">
    <div class="col-md">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                <strong>Sorry!</strong> invalid input.<br><br>
                <ul style="list-style-type:none;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card">
            <div class="card-header">
                @if($updateMode)
                    @include('livewire.layanan.edit')
                @else
                    @include('livewire.layanan.create')
                @endif
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Aksi</th>
                            <th>Nama Layanan</th>
                            <th>Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($data as $katalog)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <button wire:click="edit({{$katalog->id}})" class="btn btn-sm btn-outline-warning py-0">Edit</button> | 
                                    <button wire:click="destroy({{$katalog->id}})" class="btn btn-sm btn-outline-danger py-0">Delete</button>
                                </td>
                                <td>{{ $katalog->nama_model }}</td>
                                <td>{{ $katalog->harga }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" style="text-align: center">Belum Ada Layanan</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
