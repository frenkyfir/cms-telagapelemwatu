@extends('layouts.user_type.auth')

@section('content')
    {{-- <script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script> --}}

    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css">

    <div class="row">
        <div class="col-12">
            <div class="card w-100">
                <div class="card-header">
                    <H6>Buat berita baru</H6>
                </div>

                <form class="mb-5 p-4" action="/insertposts" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{-- @if (session('message'))
                        <div class="alert alert-success">{{ session('message') }}</div>
                    @endif --}}
                    <div class="form-group mb-1">
                        <label for="exampleFormControlInput1">Judul Berita</label>
                        <div class="col-sm-12">

                            <input type="text" name="title" id="title" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group mb-1">
                        <label for="task" class="control-label">Deskripsi Berita</label>
                        <textarea class="form-control mb-2" name="description" id="description" rows="3"></textarea>


                    </div>
                    <div class="form-group mb-1">
                        <label for="task" class="control-label">Attachment</label>

                        <div class="col-sm-12">
                            <input type="file" name="image" id="image" class="form-control ">
                        </div>
                    </div>



                    <button type="submit" class="btn btn-primary mt-4">Create</button>



                </form>
            </div>
        </div>
    </div>
    <script src="../assets/bootstrap/js/bootstrap.js"></script>
@endsection
