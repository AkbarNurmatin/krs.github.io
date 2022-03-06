@extends('layout.master')

@section('title')
    Edit
@endsection

@section('content')
    <form action="/profil/save" method="POST">
        
            <div class="form-group">
                <label>Email address</label>
                <input type="email" class="form-control" id="">               
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" id="">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>

    </form>
@endsection