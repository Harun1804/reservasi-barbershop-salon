@extends('layouts.master')

@section('title','Waiting List')

@section('content')
<section>
    <div class="container">
        @forelse ($transaksi as $tr)
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 mt-5">
                    <h3 class="fw-bold">{{ $tr->pesanan()->katalog->mitra->nama_mitra }}</h3>
                    <p>
                        {{ $tr->pesanan()->katalog->mitra->deskripsi }}
                    </p>
                </div>
                <div class="col-sm-12 col-md-2 col-lg-2">
                    <img class="rounded" src="{{ url($tr->pesanan()->katalog->mitra->thumbnail) }}" alt="logo barbershop" width="175" />
                </div>
                <div class="col-sm-12 col-md-10 col-lg-10">
                    <a href="#">
                        <img class="rounded" src="{{ asset('assets/icons/maps.png') }}" alt="logo maps" width="40" />
                    </a>
                    <p class="fw-bold my-3">
                        @foreach ($tr->detailTransaksi as $dt)
                            {{ $dt->katalog->nama_model }} {{ $dt->jumlah }}, 
                        @endforeach
                    </p>
                    <p class="fw-bold my-3">{{ $tr->waktu() }} WIB</p>
                    <h4 class="fw-bold my-3">Rp. {{ number_format($tr->total_harga_pemesanan,2,',','.') }}</h4>
                </div>
            </div>
        @empty
            <div class="row">
                <div class="col-sm-12 mt-5">
                    <div class="alert alert-info mt-5" style="text-align: center">Belum Ada History</div>
                </div>
            </div>
        @endforelse
    </div>
</section>
@endsection
