@extends('layout.master')

@section('title')
    Tabel Dosen
@endsection

@section('content')
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Pengajar</th>
            <th scope="col">email</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Tegug M.Kom</td>
            <td>Jaringan Komputer</td>
            <td>teguh@gmail.com</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Ikbal M.kom</td>
            <td>Pemograman Web</td>
            <td>ikbal@gmail.com</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>susi S.E</td>
            <td>Ekonomi</td>
            <td>susi@gmail.com</td>
        </tr>
        </tbody>
    </table>
@endsection