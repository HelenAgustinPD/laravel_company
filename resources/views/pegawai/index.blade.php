@extends('layouts.master')

@section('content')
        @if(session('sukses'))
            <div class="alert alert-success" role="alert">
                {{session('sukses')}}
            </div>
        @endif
        <div class="row">
            <div class="col-6">
                <h1>Data Pegawai</h1>
            </div>
            <div class="col-6">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-sm float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah Data Pegawai
                </button>

            </div>
           
                <table class="table table-bordered table-hover mt-3 border-dark">
                    <tr class="table-dark">
                        <th>NAMA</th>
                        <th>JABATAN</th>
                        <th>JENIS KELAMIN</th>
                        <th>AGAMA</th>
                        <th>ALAMAT</th>
                        <th>AKSI</th>
                    </tr>
                    @foreach($data_pegawai as $pegawai)
                    <tr>
                        <td>{{$pegawai->nama}}</td>
                        <td>{{$pegawai->jabatan}}</td>
                        <td>{{$pegawai->jenis_kelamin}}</td>
                        <td>{{$pegawai->agama}}</td>
                        <td>{{$pegawai->alamat}}</td>
                        <td>
                            <a href="/pegawai/{{$pegawai->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                            <a href="/pegawai/{{$pegawai->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Ingin Menghapus Data Ini ?')">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
        </div>

    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="/pegawai/create" method="POST"> 
                            {{csrf_field()}}
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama</label>
                                <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Jabatan</label>
                                <input name="jabatan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jabatan">
                            </div>

                        <div>
                        <label class="mb-2"for="">Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-select" aria-label="Default select example">
                                <option selected>Jenis Kelamin</option>
                                <option value="L">Laki - Laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>

                            <div class="mb-3 mt-3">
                                <label for="exampleInputEmail1" class="form-label">Agama</label>
                                <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agama">
                            </div>

                            <div class="form-floating">
                                <textarea name="alamat" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Alamat</label>
                            </div>
                
                            
                       
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    </div>
                </div>

@endsection
                
        

    
