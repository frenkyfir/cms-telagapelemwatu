@extends('layouts.user_type.auth')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card w-100">
                <div class="card-header">
                    <H6>Edit User</H6>
                </div>
                <form class="mb-5 p-4" action="/updateusers{{ $user->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="exampleFormControlInput1">User Name</label>
                        <input type="text" name="user" id="user" class="form-control w-90"
                            value="{{ $user->name }}" required>

                        @error('name')
                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Email</label>

                            <input type="email" name="email" id="email" class="form-control w-90"
                                value="{{ $user->email }}" required>
                        </div>
                        @error('email')
                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" i class="form-control w-90" required>
                        </div>
                        @error('password')
                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    {{-- <div class="col">
        <div class="form-group ">
            <label>Confirmation Password</label>
            <input type="password" name="confirmation_password" value="" placeholder="Input Confirmation Password"
                class="form-control w-90">
        </div>
        </div> --}}
                    <div class="mb-3">
                        <label name="role">Role</label>
                        <select name="role" class="form-select w-90 mb-3">
                            <option selected>{{ $user->role }}</option>
                            @foreach ($role as $roles)
                                <option value={{ $roles->id }}>{{ $roles->name }}</option>
                            @endforeach

                        </select>
                    </div>



                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>
    </div>
@endsection
