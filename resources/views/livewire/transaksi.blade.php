<div class="row">
    @if ($reviewMode)
        <div class="col-12">
            <ul class="list-group">
                @foreach ($cart as $c)
                    <li class="list-group-item">{{ $name->nama_model }} ({{ $c['katalog_harga'] }}) ({{ $c['jumlah'] }})</li>
                @endforeach
        
                <li class="list-group-item">Tanggal : {{ $tanggal }}</li>
                <li class="list-group-item">Waktu : {{ $jam }}</li>
                <li class="list-group-item">Total : Rp. {{ collect($c['katalog_harga'] * $c['jumlah'])->sum() }}</li>
            </ul>
            <button type="button" class="btn btn-primary mt-3" wire:click="submit">Booking</button>
        </div>
    @else
    <form wire:submit.prevent="review">
        @foreach ($mitra->katalog as $katalog)
            <div class="row">
                <div class="col-1">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" wire:model="layanan" value="{{ $katalog->id }}">
                    </div>
                </div>
                <div class="col-8">
                    <label class="form-check-label">
                        {{ $katalog->nama_model }} (Rp. {{ $katalog->harga }})
                    </label>
                </div>
                <div class="col-3">
                    @if (in_array($katalog->id,$layanan))
                        <input type="number" class="text-center" wire:change="updateQty({{ $katalog->id }}, {{ $katalog->harga }}, $event.target.value)" value="0" style="width: 100%; margin:auto;">
                    @endif
                </div>
            </div>
        @endforeach
        <div class="col-12">
            <label for="tanggal" class="form-label">Tentukan Tanggal</label>
            <input type="date" class="form-control" id="tanggal" placeholder="tanggal" wire:model="tanggal" required>
        </div>
        <div class="col-12">
            <label for="jam" class="form-label">Tentukan Jam</label>
            <input type="time" class="form-control" id="jam" placeholder="jam" wire:model="jam" required>
        </div>
        <div class="col-12 mt-3">
            <button type="submit" class="btn btn-primary">Review</button>
        </div>
    </form>
    @endif
</div>
