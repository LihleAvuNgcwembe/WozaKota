@extends('admin.admin_master')
@section('admin')
    <div class="container-fluid mb-4">
        @if ($error->any())
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>{{ $error }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="card py-3 px-3">
            <div class="card-header pb-0">
                <h6>Edit</h6>
            </div>
            <!------Form-------->
            <form role="form" action="{{ route('inventory.edit', $inventory->id) }}" method="post"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mx-4">
                    <!-- Name --->
                    <label>Name</label>
                    <div class="mb-3">
                        <input type="text" name="name" class="form-control" placeholder="Enter the name of the item"
                            required value="{{ $inventory->inven_name }}">
                    </div>
                    <!-- Quantity --->
                    <label>Quantity</label>
                    <div class="mb-3">
                        <input type="number" name="quantity" class="form-control"
                            placeholder="Enter the available quantity" step="1" required
                            value="{{ $inventory->quantity }}">
                    </div>
                    <!-- Category --->
                    <label>Category</label>
                    <div class="mb-3">
                        <select name="category" id="" class="form-control">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" @if ($category->id = $inventory->id) selected @endif>
                                    {{ $category->category_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <!-- Status --->
                    <label>Status</label>
                    <div class="mb-3">
                        <select name="status" id="" class="form-control" required>
                            <option value="Available" @if($inventory->status = 'Available') selected @endif>Available</option>
                            <option value="Unavailable" @if($inventory->status = 'Unavailable') selected @endif>Unavailable</option>
                        </select>
                    </div>
                    <!-- Price --->
                    <label>Price</label>
                    <div class="mb-3">
                        <input type="number" name="price" class="form-control"
                            placeholder="Please enter the price, please seperate decimals with '.' instead of ','"
                            min="0" max="1000" step="0.01" required value={{$inventory->inven_price}}>
                    </div>

                    <!-- Image --->
                    <label>Image</label>
                    <div class="mb-3">
                        <input type="file" name="image" class="form-control" placeholder="Insert the picture here" value="{{$inventory->image}}">
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Upload</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
