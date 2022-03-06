@extends('layout.master')

@section('title')
    Beranda
@endsection

@section('content')
    <div class="card-deck">
        <div class="card">
        <img src="{{ asset('img/manusia2.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Berdiskusi Dengan Teman</h5>
            <br><hr>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores illo recusandae ea amet aut nisi voluptatibus eius delectus itaque explicabo?</p>
        </div>
        <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
        </div>
        </div>
        <div class="card">
        <img src="{{ asset('img/manusia3.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Memiliki Banyak Teman</h5>
            <br><hr>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam voluptas excepturi aliquid incidunt libero, natus iste a tempore iusto iure.</p>
        </div>
        <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
        </div>
        </div>
        <div class="card">
        <img src="{{ asset('img/manusia4.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Presentasi Tugas</h5>
            <br><hr>
            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quia provident quibusdam assumenda, excepturi adipisci possimus minus earum officia quo sequi!</p>
        </div>
        <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
        </div>
        </div>
    </div>
@endsection