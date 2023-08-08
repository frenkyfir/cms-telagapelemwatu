@extends('layouts.user_type.auth')

@section('content')
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css">
    <div class="row">
        <div class="col-12">
            <div class="card w-90 ">
                <div class="card-header">
                    <H6>post</H6>
                </div>
                <form class="mb-5 p-4" action="/updateposts/{{ $post->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="task" class="control-label">Title</label>

                        <div class="col-sm-12">
                            <input type="text" name="title" id="title" class="form-control w-90"
                                value="{{ $post->title }}">
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleFormControlInput1">Description</label>
                        <textarea class="form-control w-90" name="description" id="description" rows="8">{{ $post->description }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="task" class="control-label">Attachment</label>
                        @if ($post->image)
                            <div style="max-height: 100%; overflow:hidden">
                                <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid mt-3">
                            </div>
                        @else
                            <img src="https://plus.unsplash.com/premium_photo-1682390303849-9cf52609ce82?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80"
                                class="img-fluid mt-3">
                        @endif
                        <div class="col-sm-12">
                            {{-- <input type="text" name="image" id="image" class="form-control w-90"
                                value="{{ $post->image }}"> --}}
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
