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
                <h6>Edit Inventory item #{{$inventory->inven_name}}</h6>
            </div>
            <!------Form-------->
            <form role="form" action="{{ route('inventory.update',$inventory->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mx-4">
                    <!-- Name --->
                    <label>Name</label>
                    <div class="mb-3">
                        <input type="text" name="name" class="form-control" placeholder="Enter the name of the item"
                            value="{{ $inventory->inven_name }}" required>
                    </div>
                    <!-- Quantity --->
                    <label>Quantity</label>
                    <div class="mb-3">
                        <input type="number" name="quantity" class="form-control"
                            placeholder="Enter the available quantity" step="1" value="{{ $inventory->quantity }}"
                            required>
                    </div>
                    <!-- Category --->
                    <label>Category</label>
                    <div class="mb-3">
                        <select name="category" id="" class="form-control" required>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{$inventory->category == $category->id ? 'selected' : ''}}>{{ $category->category_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <!-- Status --->
                    <label>Status</label>
                    <div class="mb-3">
                        <select name="status" id="" class="form-control" required>
                            <option value="Available" {{$inventory->status == 'Available' ? 'selected' :''}}>Available</option>
                            <option value="Unavailable" {{$inventory->status == 'Unavailable' ? 'selected' : '' }}>Unavailable</option>
                        </select>
                    </div>
                    <!-- Price --->
                    <label>Price</label>
                    <div class="mb-3">
                        <input type="number" name="price" class="form-control"
                            placeholder="Please enter the price, please seperate decimals with '.' instead of ','"
                            min="0" max="1000" step="0.01" value="{{$inventory->inven_price}}" required>
                    </div>

                    <!-- Image --->
                    <label>Image</label>
                    <div class="mb-3">
                       
                        <img src="{{asset('storage/image/inventory')}}/{{$inventory->image}}" class="form-control">
                        <input type="file" value="{{$inventory->image}}"
                            name="image" class="form-control" placeholder="Insert the picture here">
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Upload</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
