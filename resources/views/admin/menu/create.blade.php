@extends('layouts.user_type.auth')

@section('content')
    {{-- <script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script> --}}
    <div class="row">
        <div class="col-12">
            <div class="card w-100">
                <div class="card-header">
                    <H6>Tambahkan Wahana Baru</H6>
                </div>

                <form class="mb-5 p-4" action="/insertmenu" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{-- @if (session('message'))
                        <div class="alert alert-success">{{ session('message') }}</div>
                    @endif --}}
                    <div class="form-group mb-1">
                        <label for="exampleFormControlInput1">Nama Wahana</label>
                        <input type="text" name="title" id="title" class="form-control" required>

                    </div>
                    <div class="form-group mb-1">
                        <label for="task" class="control-label">Deskripsi Wahana</label>

                        <div class="col-sm-12">
                            <textarea class="form-control mb-2" name="description" id="description" rows="3"></textarea>

                        </div>
                    </div>
                    <div class="form-group mb-1">
                        <label for="exampleFormControlInput1">Harga</label>
                        <input type="text" name="harga" id="harga" class="form-control"
                            placeholder="kosongi jika wahana itu tidak perlu bayar">

                    </div>
                    <div class="form-group mb-1">
                        <label for="image" class="form-label">Tambahkan Gambar</label>

                        {{-- <div class="col-sm-12"> --}}
                        <img class="img-preview img-fluid">
                        <input required type="file" name="image" id="image" class="form-control "
                            onchange="previewImage()">
                        {{-- </div> --}}
                    </div>



                    <button type="submit" class="btn btn-primary mt-4">Create</button>



                </form>
            </div>
        </div>
    </div>
@endsection
