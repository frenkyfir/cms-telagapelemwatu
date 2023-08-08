@extends('layouts.user_type.auth')

@section('content')
    {{-- Script Modal Bootsrapt --}}
    {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
        integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
        integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous">
    </script> --}}
    {{--  --}}
    {{-- public/assets/DataTables/datatables.css --}}
    <link rel="stylesheet" href="../assets/DataTables/datatables.css">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/DataTables/Responsive-2.5.0/css/responsive.bootstrap.css">





    <div class="row ">
        <div class="col-12">
            <div class="card ">
                <div class="card-header ">
                    <h5>Berita</h5>
                </div>

                <div class="card-body " id="card">
                    <div class="table-responsive">
                        <table class="table align-items-center" id="myTable">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        No</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Title</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Image</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Description</th>
                                    <th
                                        class="text-uppercase text-end text-secondary text-xxs font-weight-bolder opacity-7 ps-2 p-3">
                                        Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($ticket as $tickets)
                                    <tr>
                                        <td>
                                            <div class="  "> {{ $loop->index + 1 }}


                                            </div>
                                        </td>

                                        <td>
                                            <p style="text-transform: capitalize" style="color: black"
                                                class="text-xs font-weight-bold mb-0">
                                                {{ $tickets->title }}</p>

                                        </td>
                                        <td>
                                            <img src="{{ asset('storage/' . $tickets->image) }}" style="width:100px">
                                            {{-- <p class="text-xs font-weight-bold mb-0">{{ $tickets->image }}</p> --}}

                                        </td>
                                        <td>
                                            <textarea class="flex form-control w-100" rows="2" disabled>{{ $tickets->description }}</textarea>

                                        </td>
                                        <td class="text-end ">
                                            <a href="/showposts/{{ $tickets->id }}" class="mx-3" data-bs-toggle="tooltip"
                                                data-bs-original-title="Change Status">
                                                <i class="fas fa-user-edit text-secondary"></i>
                                            </a>
                                            <span>
                                                <a href="/destroyposts/{{ $tickets->id }}" class="delete-action"
                                                    data-bs-toggle="tooltip" data-bs-original-title="Delete Ticket">
                                                    <i class="cursor-pointer fas fa-trash text-secondary"></i>
                                            </span>

                                        </td>



                                    </tr>
                                @endforeach
                            </tbody>

                        </table>


                    </div>

                </div>

            </div>
            @if (session('success'))
                <div class=" text-s alert alert-success">{{ session('success') }}</div>
            @endif
            {{-- {{ $ticket->links() }} --}}

        </div>
        <div>
            <a href="/createposts" class="btn btn-primary " style="margin-top: 20px">create</a>


        </div>
        {{-- <div>
            <button type="button" class="center btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal">
                Create
            </button>
        </div> --}}

        <form class=" p-4" action="/insertposts" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content px-4 ">
                        <h5 class="py-2 modal-title" id="exampleModalLongTitle">Create Posts</h5>
                        <div class="form-group mb-1">
                            <label for="exampleFormControlInput1">Title</label>
                            <textarea class="form-control mb-2" name="title" id="title" rows="1"></textarea>
                        </div>
                        <div class="form-group mb-1">
                            <label for="task" class="control-label">Description</label>

                            <div class="col-sm-12">
                                <input type="text" name="description" id="description" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group mb-1">
                            <label for="task" class="control-label">Attachment</label>

                            <div class="col-sm-12">
                                <input type="file" name="image" id="image" class="form-control ">
                            </div>
                        </div>



                        <button type="submit" class="btn btn-primary mt-4">Create</button>



                    </div>
        </form>
    </div>

    </div>
    </div>


    </div>




    </div>
    <script src="../assets/DataTables/datatables.js"></script>
    <script src="../assets/DataTables/Responsive-2.5.0/js/dataTables.responsive.js"></script>
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
@endsection
