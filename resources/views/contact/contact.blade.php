@extends('layouts.master')

@section('content')

    @if(session('sukses'))
        <div class="alert alert-success" role="alert">
            {{session('sukses')}}
        </div>
    @endif
    <!-- Contact Me -->
    <section id="contact" class="pt-5">
        <div class="container">
          <div class="row text-center mb-3">
            <div class="col">
              <h2>Hubungi Saya</h2>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-6">
              <form action ="/contact" method="POST">
              {{csrf_field()}}
                <div class="mb-3">
                  <label for="nama" class="form-label">Nama Lengkap</label>
                  <input name="nama" type="nama" class="form-control" id="nama" aria-describedby="nama">
                </div>
                <div class="mb-3">
                  <label for="Departemen" class="form-label">Departemen</label>
                  <input name="departemen" type="text" class="form-control" id="departemen" aria-describedby="departemen">
                </div>
                <div class="mb-3">
                  <label for="keluhan" class="form-label">Keluhan</label>
                  <textarea name="keluhan" class="form-control" id="keluhan" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary float-end">Submit</button>
                </div>
               
                <!-- Button trigger modal -->
  
              </form>
            </div>
          </div>
        </div>
      </section>  
      <!-- Contact Me End -->
@endsection