@extends('layout.master')

@section('title')
    Tabel Kelas
@endsection

@section('content')

<a href="/kelas/create" class="btn btn-primary mb-3 ">Tambah Kelas</a>
<br>

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Kelas</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Pemograman Mobile</td>
            <td><a href="#" class="btn btn-info mr-2">Edit</a><a href="#" class="btn btn-danger">Hapus</a></td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Pemograman Web Dasar</td>
            <td><a href="#" class="btn btn-info mr-2">Edit</a><a href="#" class="btn btn-danger">Hapus</a></td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Design Interface</td>
            <td><a href="#" class="btn btn-info mr-2">Edit</a><a href="#" class="btn btn-danger">Hapus</a></td>
        </tr>
        </tbody>
    </table>

@endsection