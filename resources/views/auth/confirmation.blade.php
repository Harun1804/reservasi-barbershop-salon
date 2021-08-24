@extends('layouts.auth')

@section('title','Konfirmasi')

@section('content')
@if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif
<div class="row">
    <div class="col-sm-8 col-md-8 col-lg-8 mx-auto">
        <div class="card border-primary-ijigo">
            <div class="card-body mx-auto my-5">
                <h4>Konfirmasi akun Anda melalui email yang Anda daftarkan!</h4>
            </div>
        </div>
    </div>
</div>
@endsection
