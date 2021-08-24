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
        <div class="row justify-content-end">
            <div class="col-sm-12 col-md-2 col-lg-2 my-2">
                <a href="{{ route('logout') }}" class="btn btn-warning">Logout</a>
            </div>
        </div>
    </div>
</section>
@endsection

@section('js-vendor')
@livewireScripts
@endsection
