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
    {{-- <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script> --}}

    <link rel="stylesheet" href="../assets/DataTables/datatables.css">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/DataTables/Responsive-2.5.0/css/responsive.bootstrap.css">


    <div class="row px-2">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header ">
                    <div class="d-flex flex-row justify-content-between">
                        <h5 class="">Wahana</h5>



                    </div>
                </div>

                <div class="card-body " id="card">
                    <div class="table-responsive">
                        <table class="table align-items-center " id="myTable">
                            <thead>
                                <tr>


                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        No</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Title</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Image</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Harga</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 px-2">
                                        Description</th>

                                    <th
                                        class="text-uppercase text-end text-secondary text-xxs font-weight-bolder opacity-7 ps-2 p-3">
                                        Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($menu as $menus)
                                    <tr>
                                        <td>
                                            <div class=" ">{{ $loop->index + 1 }}</div>
                                        </td>

                                        <td>
                                            <p style="text-transform: capitalize" style="color: black"
                                                class="text-xs font-weight-bold mb-0">
                                                {{ $menus->title }}</p>

                                        </td>
                                        <td>

                                            <img src="{{ asset('storage/' . $menus->image) }}" style="width:100px">


                                        </td>

                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">Rp. {{ number_format($menus->harga) }}
                                            </p>

                                        </td>
                                        <td>
                                            <textarea style="text-transform: capitalize" class="form-control">{{ $menus->description }}</textarea>

                                        </td>
                                        <td class="text-end ">
                                            <a href="{{ route('showmenu', $menus->id) }}" class="mx-3"
                                                data-bs-toggle="tooltip" data-bs-original-title="Change Status">
                                                <i class="fas fa-user-edit text-secondary"></i>
                                            </a>
                                            <span>
                                                <a href="{{ route('destroymenu', $menus->id) }}" class="delete-action"
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
            {{-- @if (session('success'))
                <div class=" w-25 text-s alert alert-success">{{ session('success') }}</div>
            @endif --}}
            {{-- {{ $menu->links() }} --}}
            {{-- {!! $menu->render() !!} --}}

        </div>
        <div>
            <a href="/buatmenu" class="btn btn-primary mt-4">Create</a>


        </div>
        {{-- <div>
            <button type="button" class="center btn btn-sm btn-primary " data-toggle="modal" data-target="#exampleModal">
                Create
            </button>
        </div> --}}

        <form class=" p-4" action="/insertmenu" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content px-4 ">
                        <h5 class="py-2 modal-title" id="exampleModalLongTitle">Create Wahana</h5>
                        <div class="form-group mb-1">
                            <label for="exampleFormControlInput1">Title</label>
                            <input type="text" name="title" id="title" class="form-control" required>

                        </div>
                        <div class="form-group mb-1">
                            <label for="task" class="control-label">Description</label>

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
                            <label for="image" class="form-label">Add Image</label>

                            {{-- <div class="col-sm-12"> --}}
                            <img class="img-preview img-fluid">
                            <input required type="file" name="image" id="image" class="form-control "
                                onchange="previewImage()">
                            {{-- </div> --}}
                        </div>



                        <button type="submit" class="btn btn-primary mt-4">Create</button>



                    </div>
        </form>

    </div>
    </div>


    </div>


    </div>
    <script>
        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('#img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFRevent) {
                imgPreview.src = oFRevent.target.result;

            }

        }
    </script>
    <script>
        function confirmDelete(event, form) {
            event.preventDefault(); // Mencegah pengiriman formulir secara langsung

            if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
                form.submit(); // Mengirimkan formulir setelah konfirmasi
            }
        }
    </script>


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
