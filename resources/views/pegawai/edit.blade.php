@extends('layouts.master')

@section('content')
        <h1>Edit Data Pegawai</h1>
        @if(session('sukses'))
            <div class="alert alert-success" role="alert">
                {{session('sukses')}}
            </div>
        @endif
        <div class="row">
        
        <form action="/pegawai/{{$pegawai->id}}/update" method="POST"> 
            {{csrf_field()}}
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama</label>
                <input name="nama" value="{{$pegawai->nama}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Jabatan</label>
                <input name="jabatan" value="{{$pegawai->jabatan}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jabatan">
            </div>
        
            <div>
                <label class="mb-2"for="">Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-select" aria-label="Default select example">
                
                <option selected>Jenis Kelamin</option>
                <option value="L" @if($pegawai->jenis_kelamin == 'L') selected @endif> Laki - Laki</option>
                <option value="P" @if($pegawai->jenis_kelamin == 'P') selected @endif> Perempuan</option>
            </select>
            </div>

            <div class="mb-3 mt-3">
                <label for="exampleInputEmail1" class="form-label">Agama</label>
                <input name="agama" value="{{$pegawai->agama}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agama">
            </div>

            <div class="form-floating">
                <textarea name="alamat" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px">{{$pegawai -> alamat}}</textarea>
                <label for="floatingTextarea2">Alamat</label>
            </div>
                <button type="submit" class="btn btn-warning mt-3">Update</button>
            </form>

        </div>

@endsection


