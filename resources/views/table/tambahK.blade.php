@extends('layout.master')

@section('title')
    Tambah Kelas
@endsection

@section('content')

<form action="/tambahkelas" method="POST">
  @csrf
  <div class="form-group">
    <label>Nama Kelas</label>
    <input type="text" name="nama_kelas" class="form-control">
  </div>
  @error('nama_kelas')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  <button type="submit" class="btn btn-primary">Tambah Kelas</button>
</form>

@endsection