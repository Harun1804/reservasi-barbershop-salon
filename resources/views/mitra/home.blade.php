@extends('layouts.master')

@section('title','Home Mitra')

@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <img class="d-block mx-auto mt-4" src="{{ url($mitra->thumbnail) }}" alt="profile picture"
                    width="100" />
                <h2 class="fw-bold text-center mt-2">{{ $mitra->nama_mitra }}</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 my-2">
                <label class="h5" for="alamat">Alamat Toko</label>

                <textarea class="form-control" rows="3" disabled>{{ $mitra->alamat }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 my-2">
                <label class="h5" for="deskripsi">Deskripsi Toko</label>

                <textarea class="form-control" disabled rows="3">{{ $mitra->deskripsi }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-8 col-lg-8 mt-4">
                <p class="h5">Layanan Tersedia</p>
                @foreach ($mitra->katalog as $kg) 
                <div class="input-group my-3">
                    <input class="form-control me-5" type="text" name="layanan1" id="layanan{{ $loop->index }}" value="{{ $kg->nama_model }}"
                        disabled="true" />
                    <span class="input-group-text">Rp</span>
                    <input class="form-control" type="text" name="harga-layanan1" id="harga-layanan{{ $loop->index }}" value="{{ number_format($kg->harga,2,',','.') }}"
                        disabled="true" />
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection
