@extends('layouts.user_type.auth')

@section('content')
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css">

    <div class="row">
        <div class="col-12">
            <div class="card w-90 ">
                <div class="card-header">
                    <H6>Menu</H6>
                </div>
                <form class="mb-5 p-4" action="/updatemenu/{{ $menu->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="task" class="control-label">Title</label>

                        <div class="col-sm-12">
                            <input type="text" name="title" id="title" class="form-control w-90"
                                value="{{ $menu->title }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="task" class="control-label">Harga</label>

                        <div class="col-sm-12">
                            <input type="text" name="harga" id="harga" class="form-control w-90"
                                value="{{ $menu->harga }}">
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleFormControlInput1">Description</label>
                        <textarea class="form-control w-90" name="description" id="description" rows="5">{{ $menu->description }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="task" class="control-label">Images</label>

                        {{-- @if ($menu->image) --}}
                        <div style="max-height: 500px; overflow:hidden ">
                            <img src="{{ asset('storage/' . $menu->image) }}" class="img-fluid mt-3">
                        </div>
                        {{-- @else
                            <img class="img-preview img-fluid mb-3">
                        @endif --}}
                        <div class="col-sm-12">
                            {{-- <input type="text" name="image" id="image" class="form-control w-90"
                                value="{{ $menu->image }}"> --}}
                            <br>
                            <input type="file" name="image" id="image" class="form-control w-90">
                        </div>
                    </div>


                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
    <script src="../assets/bootstrap/js/bootstrap.js"></script>
@endsection
