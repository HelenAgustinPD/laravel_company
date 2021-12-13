@extends('layouts.master')

@section('content')
    <!-- Jumbotron -->
    <section class="jumbotron text-center mb-3 mt-5">
        <h1 class="display-4">Parivera Corporation</h1>
        <p class="lead">Perusahaan Yang Bergerak di Bidang Transportasi</p>
    </section>
    <!-- Jumbotron End -->

    <div class="row">
        <div class="col-6 mt-3 mb-3 mx-auto">
            <a class="btn btn-primary" href="/pegawai" role="button">Data Pegawai</a>
        </div>
        <div class="col-2 mt-3 mb-3 mx-auto">
            <a class="btn btn-danger" href="/contact" role="button">Contact</a>
        </div>
    </div>


@endsection