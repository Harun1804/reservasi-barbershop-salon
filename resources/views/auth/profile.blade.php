@extends('layouts.master')

@section('title','Profile')

@section('css-vendor')
@livewireStyles
@endsection

@section('content')
<section>
    <div class="container">
        @if (auth()->user()->role == 'pelanggan')
        <livewire:profile.pelanggan />
        @else
        <livewire:profile.mitra />
        @endif
        <div class="row">
            <div class="col-sm-6 my-2 justify-content-start">
                <form action="{{ route('hapus.account') }}" method="post">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger" onclick="return confirm('Yakin')" type="submit">Hapus Akun</button>
                </form>
            </div>
            <div class="col-sm-6 col-md-2 col-lg-2 my-2 justify-content-end">
                <a href="{{ route('logout') }}" class="btn btn-warning">Logout</a>
            </div>
        </div>
    </div>
</section>
@endsection

@section('js-vendor')
@livewireScripts
@endsection
