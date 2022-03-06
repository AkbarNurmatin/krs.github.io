@extends('layout.master')

@section('title')
    Profil
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm">
            <div class="card" style="width: 15rem;">
                <img src="{{ asset('img/profil.jpg') }}" class="card-img-top" alt="profil">
                <div class="card-body">
                <h5 class="card-title">Maulana Aziz</h5>
                <br><hr>
                <a href="/profil/update" class="btn btn-warning btn-block">Edit</a>
                </div>
            </div>
        </div>
        <div class="col-lg">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">NIM</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Kelas</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($mhs as $item)
                        <tr>
                        
                            <td>{{ ($item->nim) }}</td>
                            <td>{{ ($item->nama) }}</td>
                            <td>{{ ($item->email) }}</td>
                            <td>{{ ($item->Alamat) }}</td>
                            <td>{{ ($item->kelas_id) }}</td>
                        </tr>
                        @endforeach
                </table>
        </div>
    </div>
</div>
    
@endsection