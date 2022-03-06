@extends('layout.master')

@section('title')
    Tabel Mahasiswa
@endsection

@section('content')
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Kelas</th>
            <th scope="col">NIM</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Maulana</td>
            <td>Manajement informatika 1</td>
            <td>1256703</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Agun</td>
            <td>Manajement informatika 1</td>
            <td>79237522</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Akbar</td>
            <td>anajement informatika 1</td>
            <td>35623586</td>
        </tr>
        </tbody>
    </table>
@endsection