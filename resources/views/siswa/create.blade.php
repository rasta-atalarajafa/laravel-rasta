@extends('templates.base')

@section('content')
<section class="content-header">
    <h1>
      Tambah Data Section
    </h1>
  </section>
  
  <!-- Main content -->
  <section class="content">
<form method="post" action="/siswa">
    @csrf
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="nama" value="{{ old('nama') }}">
        @error('nama')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan Email" name="email" value="{{ old('email') }}">
        @error('email')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" placeholder="Masukkan Alamat" name="alamat" value="{{ old('alamat') }}">
        @error('alamat')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Tambah Data!</button>
    <a href="/siswa">Kembali</a>
</form>
@endsection