@extends('layouts.layout')
@section('main')
    <div class="container-fluid">
        <div
            class="mx-auto mb-2 max-w-md bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg" src="{{ asset('assets/img/Woza-Woza-Kota-Logo.png') }}" alt="" />
            </a>
            @if (session('success'))
                <div class="container mx-auto">
                    <div id="alert-3"class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                        role="alert">
                        <div class="ml-3 text-sm font-medium">
                            {{ session('success') }}
                        </div>

                    </div>
                </div>
            @endif
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white flex">

                        <h5 class="text-blue-700">{{ Auth::user()->name }}</h5>

                        Your Order is currently being processed
                    </h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                    order no: <span class="font-light text-red-400">{{ $order->order_no }} </span>
                </p>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                    order item:
                </p>

                <div class="relative overflow-x-auto mb-2">
                    <table class="w-full text-sm text-left text-gray-700 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3 rounded-l-lg">
                                    Product name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Qty
                                </th>
                                <th scope="col" class="px-6 py-3 rounded-r-lg">
                                    Price
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orderItem as $item)
                                <tr class="bg-white dark:bg-gray-800">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $item->product->product_name}}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $item->quantity }}
                                    </td>
                                    <td class="px-6 py-4">
                                        R{{ $item->unit_price }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr class="font-semibold text-gray-900 dark:text-white">
                                <th scope="row" class="px-6 py-3 text-base">Total</th>
                                <td class="px-6 py-3"></td>
                                <td class="px-6 py-3">R{{ $order->total_price }}</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>

                <button type="button"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Return to menu
                </button>
            </div>
        </div>
    </div>
@endsection
