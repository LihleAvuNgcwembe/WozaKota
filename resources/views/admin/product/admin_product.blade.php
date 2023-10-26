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
            href="{{ route('.inven.create.form') }}">
            Add new item
        </a>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>{Product} table</h6>
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
                                        description
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Created at
                                    </th>

                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                               @foreach ($products as $product )
                                   
                               @endforeach
                                    <tr>

                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src='../storage/image/inventory/{{$product->image }}'
                                                        class="avatar avatar-sm me-3" alt="user1">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{$product->product_name}}</h6>

                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0 text-center">
                                                {{$product->price }}</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0 px-3">{{$product->category}}</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0 text-center">{{$product->description}}
                                            </p>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span
                                                class="text-secondary text-xs font-weight-bold">{{$product->created_at->format('d-m-y')}}</span>
                                        </td>
                                        <td class="align-middle">
                                            <a href="{{route('inventory.edit')}}" class="text-secondary font-weight-bold text-xs"
                                                data-toggle="tooltip" data-original-title="Edit user">
                                                Edit
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection