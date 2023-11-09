@extends('admin.admin_master')
@section('admin')
    <div class="container-fluid py-4">
        @if (Session::has('Success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session::get('error') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (Session::has('Error'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session::get('error') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
        <div class="d-flex">
            <a class="btn bg-gradient-primary w-100 px-3 mb-2 ms-2" data-class="bg-white"
                href="{{ route('admin.user.create') }}">
                Add User
            </a>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>User table</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Name
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Email
                                        </th>
                                         <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Order No
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Created at
                                        </th>

                                        <th class="text-secondary opacity-7"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0 text-left">
                                                    {{ $user->name}}</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0 px-3 text-center">{{ $user->email}}</p>
                                            </td>
                                            <td>
            
                                                <select name="category" id="" class="form-control" required>
                                                    @foreach ($user->orders as $order)
                                                        <option value="{{ $order->id }}">{{ $order->order_no }}</option>
                                                    @endforeach
                                                </select>
                                                
                                                <!--<p class="text-xs font-weight-bold mb-0 px-3"{$item->description}}</p>-->
                                            </td>
                                            <td class="align-middle text-center">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{ $user->created_at->format('d-m-y') }}</span>
                                            </td>
                                            <td class="align-middle">
                                                <a href="{{route('admin.user.edit',$user->id)}}" class="text-secondary btn btn-warning text-secondary font-weight-bold text-xs"
                                                    data-toggle="tooltip" data-original-title="Edit user">
                                                    Edit
                                                </a>
                                            </td>
                                            <td class="align-middle">
                                                <a href="{{route('admin.user.delete', $user->id)}}" class="btn btn-danger text-secondary font-weight-bold text-xs"
                                                    data-toggle="tooltip" data-original-title="Edit user">
                                                    Delete
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex">
            {!! $users->links() !!}
        </div>
    </div>
@endsection