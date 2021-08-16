@extends('layouts.pelanggan')

@section('title','Home Pelanggan')

@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 mt-3">
                <form action="" class="row g-3">
                    <div class="col-auto">
                        <i class="bi bi-geo-alt" style="font-size: 1.5rem"></i>
                    </div>
                    <div class="col-auto">
                        <select name="lokasi" id="lokasi" class="form-select" aria-label="Pilih lokasi">
                            <option value="Medan" selected disabled>Medan</option>
                        </select>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row g-5 justify-content-center text-center mt-5 pt-2">
            <div class="col-sm-2 col-md-2 col-lg-2 mt-4 pt-4">
                <div class="card rounded">
                    <div class="card-body">
                        <a href="#">
                            <img src="{{ asset('assets/icons/babershop.png') }}" alt="barbershop logo" width="100" />
                        </a>
                    </div>
                </div>
                <p class="h6 mt-3">Barbershop</p>
            </div>
            <div class="col-sm-2 col-md-2 col-lg-2 mt-4 pt-4">
                <div class="card rounded">
                    <div class="card-body">
                        <a href="#">
                            <img src="{{ asset('assets/icons/salon.png') }}" alt="salon logo" width="100" />
                        </a>
                    </div>
                </div>
                <p class="h6 mt-3">Salon</p>
            </div>
        </div>
    </div>
</section>
@endsection