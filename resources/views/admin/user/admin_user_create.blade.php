@extends('admin.admin_master')
@section('admin')
    <div class="container-fluid mb-4">
        @if (session()->has('error'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>{{ session('error') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="card py-3 px-3">
            <div class="card-header pb-0">
                <h6>New User</h6>
            </div>
            <!------Form-------->
            <form role="form" action="{{ route('admin.user.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mx-4">
                    <!-- Name --->
                    <label>Name</label>
                    <div class="mb-3">
                        <input type="text" name="name" class="form-control" placeholder="Enter the name of the item"
                            {{ $errors->has('name') ? 'error' : '' }}>
                        <!---Error --->
                        @if ($errors->has('name'))
                            <div class="text-danger">
                                {{ $errors->first('name') }}
                            </div>
                        @endif
                    </div>
                    <!-- Email--->
                    <label>Email</label>
                    <div class="mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Enter the name of the item"
                            {{ $errors->has('email') ? 'error' : '' }}>
                        <!---Error --->
                        @if ($errors->has('email'))
                            <div class="text-danger">
                                {{ $errors->first('email') }}
                            </div>
                        @endif
                    </div>
                    <!-- Password -->
                    <label>password</label>
                    <div class="mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Enter password"
                            {{ $errors->has('password') ? 'error' : '' }}>
                        <!---Error --->
                        @if ($errors->has('password'))
                            <div class="text-danger">
                                {{ $errors->first('password') }}
                            </div>
                        @endif
                    </div>
                    <!-- Confirm Password -->
                    <label>Confirm Password</label>
                    <div class="mb-3">
                        <input type="password" name="password_confirmation" class="form-control"
                            placeholder="Enter password confirmation" required>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Create</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
