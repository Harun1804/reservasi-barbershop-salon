@extends('layouts.master')

@section('title','Detail Toko')

@section('content')
    <section>
        <div class="container">
            <div class="row my-3">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="{{ url($mitra->thumbnail) }}" alt="..." width="150px">
                        </div>
                        <div class="col-md-9">
                            <ul class="list-group">
                                <li class="list-group-item">{{ $mitra->nama_mitra }}</li>
                                <li class="list-group-item">{{ $mitra->alamat }}</li>
                                <li class="list-group-item">{{ $mitra->deskripsi }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    @forelse ($mitra->katalog as $katalog)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    {{ $katalog->nama_model }}
                                </label>
                            </div>
                    @empty
                        <p>Belum Ada Data</p>
                    @endforelse
                </div>
            </div>
        </div>
    </section>
@endsection