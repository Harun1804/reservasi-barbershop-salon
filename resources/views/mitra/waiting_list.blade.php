@extends('layouts.master')

@section('title','Waiting List')

@section('content')
<section>
    <div class="container">
        @forelse ($transaksi as $tr)
        @if ($tr->pesanan()->katalog->mitra_id == $userID)            
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 mt-5">
                    <h3 class="fw-bold">{{ $tr->user->name }}</h3>
                </div>
                <div class="col-sm-12 col-md-2 col-lg-2">
                    <img class="rounded" src="{{ asset('assets/icons/woman.png') }}" alt="profile pict" width="175" />
                </div>
                <div class="col-sm-12 col-md-10 col-lg-10">
                    <p class="fw-bold my-3">{{ $tr->waktu() }} WIB</p>
                    <p class="fw-bold my-3">                        
                    @foreach ($tr->detailTransaksi as $dt)
                        {{ $dt->katalog->nama_model }}, 
                    @endforeach
                    </p>
                    <h4 class="fw-bold my-3">Rp. {{ number_format($tr->total_harga_pemesanan,2,',','.') }}</h4>
                </div>
            </div>
        @endif
        @empty
            <div class="row">
                <div class="col-12">
                    <div class="alert alert-info mt-5" style="text-align: center">
                        Tidak Ada Antrian
                    </div>
                </div>
            </div>
        @endforelse
    </div>
</section>
@endsection
