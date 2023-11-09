@extends('admin.admin_master')
@section('admin')
    <div class="container-fluid mb-4">
        @if (session()->has('error'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>{{ session('error') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('success') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
        <div class="card py-3 px-3">
            <div class="card-header pb-0">
                <h6>New Product item</h6>
            </div>
            <!------Form-------->
            <form role="form" action="{{ route('admin.product.update', $product->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mx-4">
                    <!-- Name --->
                    <label>Name</label>
                    <div class="mb-3">
                        <input type="text" name="name" class="form-control" placeholder="Enter the name of the item"
                            required value="{{$product->product_name}}">
                    </div>
                    <!-- Category --->
                    <label>Category</label>
                    <div class="mb-3">
                        <select name="category" id="" class="form-control" required>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{$product->category == $category->id ? 'selected' : ''}}>{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <!-- Description --->
                    <label>Descripion</label>
                    <div class="mb-3">
                        <textarea type="text" name="description" class="form-control" placeholder="Enter item description" 
                        value="{{$product->description}}" required>
                            {{$product->description}}
                        </textarea>
                    </div>
                    <!-- Status --->
                    <label>Status</label>
                    <div class="mb-3">
                        <select name="status" id="" class="form-control" required>
                            <option value="Available "{{$product->status == 'Available' ? 'selected' :''}}>Available</option>
                            <option value="Unavailable"{{$product->status == 'Unavailable' ? 'selected' : '' }}>Unavailable</option>
                        </select>
                    </div>
                    <!-- Price --->
                    <label>Price</label>
                    <div class="mb-3">
                        <input type="number" name="price" class="form-control"
                            placeholder="Please enter the price, please seperate decimals with '.' instead of ','"
                            min="0" max="1000" step="0.01" value="{{$product->price}}" required>
                    </div>

                    <!-- Image --->
                    <label>Image</label>
                    <div class="mb-3">
                        <img src="{{asset('storage/image/product')}}/{{$product->image}}" class="form-control">
                        <input type="file" name="image" class="form-control" placeholder="Insert the picture here">
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Upload</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection