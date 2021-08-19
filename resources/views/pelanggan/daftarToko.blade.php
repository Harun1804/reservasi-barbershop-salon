@extends('layouts.master')

@section('title','Daftar Toko')

@section('content')
<section>
    <div class="container">
        <div class="row">
            @forelse ($mitra as $m)
            <div class="col-md-4 my-3">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ url($m->thumbnail) }}" class="card-img-top" alt="..." height="150px">
                        <hr>
                        <h4 class="card-title">{{ $m->nama_mitra }}</h4>
                        <p class="card-text">{{ $m->alamat }}</p>
                        <p class="card-text">{{ Str::limit($m->deskripsi, 25, '...') }}</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">Lihat Detail Toko</a>
                    </div>
                </div>
            </div>
            @empty
                <div class="col-md-12">
                    <div class="alert alert-danger" role="alert">
                        Belum Ada Mitra
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</section>
@endsection
