@extends('layouts.master')

@section('title','Detail Toko')

@section('css-vendor')
    @livewireStyles
@endsection

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
                    <hr>
                    @livewire('transaksi', ['mitra' => $mitra])
                    
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js-vendor')
    @livewireScripts
@endsection