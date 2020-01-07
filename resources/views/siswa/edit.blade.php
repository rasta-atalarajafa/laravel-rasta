@extends('templates.base')

@section('content')
<section class="content-header">
    <h1>
      Ubah Data Section
    </h1>
  </section>
  
  <!-- Main content -->
  <section class="content">
  <form method="post" action="/siswa/{{ $siswa->id }}">
    @method('patch')
    @csrf
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="nama" value="{{ $siswa->nama }}">
        @error('nama')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan Email" name="email" value="{{ $siswa->email }}">
        @error('email')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" placeholder="Masukkan Alamat" name="alamat" value="{{ $siswa->alamat }}">
        @error('alamat')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">+ Ubah Data!</button>
    <a href="/siswa">Kembali</a>
</form>
@endsection