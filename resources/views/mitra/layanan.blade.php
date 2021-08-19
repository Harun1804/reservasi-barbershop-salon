@extends('layouts.master')

@section('title','Home Mitra')

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
@endsection