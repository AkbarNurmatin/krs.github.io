@extends('layout.master')

@section('title')
    Mata Kuliah
@endsection

@section('content')

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Kode Mata Kuliah</th>
            <th scope="col">Nama</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
            @foreach ($list as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->nama}}</td>
                <td>
                    <button data-toggle="modal" data-target="#modaladddata" class="btn btn-primary m-1">Tambah</button>
                    <button onclick="editData('{{$item->id}}', '{{$item->nama}}')"  class="btn btn-warning m-1">Edit</button>
                    <a href="/matakuliah/delete/{{$item->id}}" class="btn btn-danger m-1">delete data</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

        <div class="modal" id="modaladddata" tabindex="-1">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <form action="/matakuliah/save" method="POST">
                <div class="modal-body">
                        @csrf
                        <div class="form-group">
                            </div>
                            <div class="form-group">
                            <label for="exampleInputPassword1">Nama Mata Kuliah</label>
                            <input type="text" name="nama">
                        </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
            </div>
            </div>
        </div>

        <div class="modal" id="modaladddata-update" tabindex="-1">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <form action="/matakuliah/update" method="POST">
                <div class="modal-body">
                        @csrf
                        <div class="form-group">
                            </div>
                            <div class="form-group">
                            <label for="exampleInputPassword1">Nama Mata Kuliah</label>
                            <input type="text" name="nama" id="nama">
                            <input type="hidden" name="id" id="id">
                        </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
            </div>
            </div>
        </div>

<script>
        function editData (id, nama) {
    $('#id').val(id)
    $('#nama').val(nama)
    $('#modaladddata-update').modal('show');
}
</script>
@endsection