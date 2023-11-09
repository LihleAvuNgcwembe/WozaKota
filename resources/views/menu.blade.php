@extends('layouts.layout')
@section('main')
    <div class="container-fluid mt-2">
        <div class="container  mx-auto px-2 sm:justify-items-center">

            <div class=' bg-white text-center p-2 mb-2  rounded-lg border border-gray-200'>
                <h1 class= "text-5xl">
                    Menu
                </h1>
            </div>
            <div class="grid gap-2 lg:grid-cols-4 grid-cols-1 mx-auto">
                @foreach ($products as $product)
                    <div
                        class="mx-auto mb-2 w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        
                            <img class="p-8 rounded-t-lg w-full h-60" src="{{ asset('storage/image/product') }}/{{ $product->image }}"
                                alt="product image" />
                        
                        <div class="px-5 pb-5">

                            <h1 class="text-center p-3 text-xl mb-1">{{ $product->product_name }}</h1>

                            <p class=" mb-1 min-h-[48px]">
                                {{ $product->description }}
                            </p>

                            <h3 class="mb-1 text-center">
                                R{{ $product->price }}
                            </h3>

                            <div class='text-center'>
                                <button type="button" class="btnmen">
                                    <a href="{{route('add-to-cart', $product->id)}}">add to cart</a>
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>   
@endsection
