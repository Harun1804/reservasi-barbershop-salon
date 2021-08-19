@extends('layouts.master')

@section('title','Layanan')

@section('css-vendor')
    @livewireStyles
@endsection

@section('content')
    <section>
        <div class="container">
            <livewire:layanan />
        </div>
    </section>
@endsection

@section('js-vendor')
    @livewireScripts
@endsection