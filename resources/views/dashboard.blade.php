<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __('Order history') }}
                </div>
            </div>
        </div>
    </div>

    @foreach ($orderhistory as $record)
        <div class="mb-2 mx-auto  max-w-6xl  lg:max-w-6xl p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8">
            <div class="flex items-center justify-between mb-4">
                <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">Latest
                    Order no: <span class="font-normal text-blue-600">{{$record->order_no}}</span>
                </h5>

                <h6 class="text-xl font-bold leading-none text-gray-900 dark:text-white flex">
                    Status:
                    <p class="text-sm font-normal text-blue-600 hover:underline dark:text-blue-500">
                        {{$record->status}}
                    </p>
                </h6>
            </div>
            <div class="border-b-4">
                <h6>Date: <span class="text-blue-600">{{$record->created_at}}</span> </h6>
            </div>

            <!-- header ends -->
            <div class="flow-root">
                <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                    @foreach ($record->orderitems as $items)
                    @php
                        $sub_total = $items->unit_price * $items->quantity;
                    @endphp
                    <li class="py-3 sm:py-4">
                        <div class="flex items-center space-x-4">
                            <div class="flex-shrink-0">
                                <img class="w-8 h-8 rounded" src="{{ asset('storage/image/product') }}/{{$items->product->image}}">
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                    {{$items->product->product_name}}
                                <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                    QTY: {{$items->quantity}}
                                </p>
                            </div>
                            <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                R{{$sub_total}}
                            </div>
                        </div>
                    </li>
                     @endforeach  
                </ul>

                <div class="flex mb-4 border-t-4 justify-end">
                    <h5 class=" mt-2 text-xl font-bold leading-none text-gray-900 dark:text-white">Latest
                        Total: R<span class="font-normal text-blue-600">{{$record->total_price}}</span>
                    </h5>
                </div>
            </div>
        </div>
    @endforeach




</x-app-layout>
