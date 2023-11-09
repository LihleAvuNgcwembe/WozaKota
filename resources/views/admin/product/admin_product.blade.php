@extends('admin.admin_master')
@section('admin')
    <div class="container-fluid py-4">
        @if (Session::has('Success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session::get('error') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="d-flex">
            <a class="btn bg-gradient-primary w-100 px-3 mb-2 ms-2" data-class="bg-white"
                href="{{ route('admin.product.create') }}">
                Add new item
            </a>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Product table</h6>
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
                                            Price
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Category
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Description
                                        </th>
                                         <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            status
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Created at
                                        </th>

                                        <th class="text-secondary opacity-7"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($product as $item)
                                        <tr>

                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                        <img src='{{asset('storage/image/product')}}/{{ $item->image}}'
                                                            class="avatar avatar-sm me-3" alt="user1">
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">{{ $item->product_name }}</h6>

                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0 text-center">
                                                    {{ $item->price }}</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0 px-3">{{ $item->category}}</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0 px-3">{{ $item->description}}</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="badge badge-sm bg-gradient-success">{{ $item->status }}</span>
                                            </td>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{ $item->created_at->format('d-m-y') }}</span>
                                            </td>
                                            <td class="align-middle">
                                                <a href="{{route('admin.product.edit', $item->id)}}" class="text-secondary btn btn-warning text-secondary font-weight-bold text-xs"
                                                    data-toggle="tooltip" data-original-title="Edit user">
                                                    Edit
                                                </a>
                                            </td>
                                            <td class="align-middle">
                                                <a href="{{route('admin.producr.delete', $item->id)}}" class="btn btn-danger text-secondary font-weight-bold text-xs"
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
            {!! $product->links() !!}
        </div>
    </div>
@endsection