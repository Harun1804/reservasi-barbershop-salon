@extends('layouts.master')

@section('title','History')

@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 mt-5">
                <h3 class="fw-bold">Barbershop A</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Quisquam totam maxime assumenda et nemo? Modi, debitis ut?
                    Expedita, blanditiis magnam.
                </p>
            </div>
            <div class="col-sm-12 col-md-2 col-lg-2">
                <img class="rounded" src="{{ asset('assets/icons/babershop-image.png') }}" alt="logo barbershop" width="175" />
            </div>
            <div class="col-sm-12 col-md-10 col-lg-10">
                <a href="#">
                    <img class="rounded" src="{{ asset('assets/icons/maps.png') }}" alt="logo maps" width="40" />
                </a>
                <p class="fw-bold my-3">1 Dewasa, 1 Anak-anak</p>
                <p class="fw-bold my-3">Jum'at, 30 Juli 2021 - 10.00 WIB</p>
                <h4 class="fw-bold my-3">Rp15.000</h4>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 mt-5">
                <h3 class="fw-bold">Salon B</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Quisquam totam maxime assumenda et nemo? Modi, debitis ut?
                    Expedita, blanditiis magnam.
                </p>
            </div>
            <div class="col-sm-12 col-md-2 col-lg-2">
                <img class="rounded" src="{{ asset('assets/icons/salon-image.png') }}" alt="logo barbershop" width="175" />
            </div>
            <div class="col-sm-12 col-md-10 col-lg-10">
                <a href="#">
                    <img class="rounded" src="{{ asset('assets/icons/maps.png') }}" alt="logo maps" width="40" />
                </a>
                <p class="fw-bold my-3">1 Rebonding, 1 Smoothing</p>
                <p class="fw-bold my-3">Jum'at, 30 Juli 2021 - 10.00 WIB</p>
                <h4 class="fw-bold my-3">Rp50.000</h4>
            </div>
        </div>
    </div>
</section>
@endsection
