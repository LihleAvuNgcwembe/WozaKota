@extends('admin.admin_master')
@section('admin')
    <div class="container-fluid py-4">
        @if (Session::has('error'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>{{ session::get('error') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <h3>Admin: {{Auth::guard('admin')->user()->email}}</h3>
        
@endsection
