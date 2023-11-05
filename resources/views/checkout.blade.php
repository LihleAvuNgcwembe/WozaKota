<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Woza Woza Kota Place</title>
    <!--<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="{{ asset('assets/css/checkout.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet"href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.css" rel="stylesheet" />

    <!--<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />-->
</head>

<body>


    <div class="container ">
        <div class='row'>
            <div class='col-md-12'>
                <div class="card">
                    <div class="card-header">
                        Shopping Cart Summary
                    </div>
                    <div class="card-body">
                        <table id="cart" class="table table-hover table-condensed">
                            <thead>
                                <tr>
                                    <th style="width:50%">Product</th>
                                    <th style="width:10%">Price</th>
                                    <th style="width:8%">Quantity</th>
                                    <th style="width:22%" class="text-center">Subtotal</th>
                                    <th style="width:10%"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $total = 0 @endphp
                                @if (session('cart'))
                                    @foreach (session('cart') as $id => $details)
                                        @php $total += $details['price'] * $details['quantity'] @endphp
                                        <tr data-id="{{ $id }}">
                                            <td data-th="Product">
                                                <div class="row">
                                                    <div class="col-sm-3 hidden-xs"><img
                                                            src="{{ asset('storage/image/product') }}/{{ $details['image'] }}"
                                                            width="100" height="100" class="img-responsive mx-auto" />
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <h4 class="nomargin">{{ $details['product_name'] }}</h4>
                                                    </div>
                                                </div>
                                            </td>
                                            <td data-th="Price">R{{ $details['price'] }}</td>
                                            <td data-th="Quantity">
                                                <input type="number" value="{{ $details['quantity'] }}"
                                                    class="form-control quantity cart_update" min="1" />
                                            </td>
                                            <td data-th="Subtotal" class="text-center">
                                                {{ $details['price'] * $details['quantity'] }}
                                            </td>
                                            <td class="actions" data-th="">
                                                <button class="btn btn-danger btn-sm cart_remove"><i
                                                        class="fa fa-trash-o"></i> Delete</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="5" style="text-align:right;">
                                        <h3><strong>Total R{{ $total }}</strong></h3>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="5" style="text-align:right;">
                                        <form action="/session" method="POST">
                                            <a href="{{ url('/') }}" class="btn btn-danger"> <i
                                                    class="fa fa-arrow-left"></i> Continue Shopping</a>
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <!-- <input type='hidden' name="total" value="25">-->
                                            <!--<input type='hidden' name="productname" value="Lebza Kota">-->
                                            <button class="btn btn-success bg-black" type="button"
                                                data-modal-target="payment-option"
                                                data-modal-toggle="payment-option">
                                                Checkout
                                            </button>


                                            <!-- Payment option modal -->
                                            <div id="payment-option" tabindex="-1" aria-hidden="true"
                                                class="fixed border-4 border-black  top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                <div class="relative w-full max-w-2xl max-h-full">
                                                    <!-- Modal content -->
                                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                        <!-- Modal header -->
                                                        <div
                                                            class="flex items-start justify-between p-4 border-b border-black rounded-t dark:border-gray-600">
                                                            <h3
                                                                class="text-xl font-semibold text-gray-900 dark:text-white">
                                                                Payment Options
                                                            </h3>
                                                            <button type="button"
                                                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                                data-modal-hide="payment-option">
                                                                <svg class="w-3 h-3" aria-hidden="true"
                                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 14 14">
                                                                    <path stroke="currentColor" stroke-linecap="round"
                                                                        stroke-linejoin="round" stroke-width="2"
                                                                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                                </svg>
                                                                <span class="sr-only">Close modal</span>
                                                            </button>
                                                        </div>
                                                        <!-- Modal body -->
                                                        <div class="p-6 space-y-6 text-left">
                                                            <h3 class="underline">pay via secure gateway:</h3>
                                                            <p
                                                                class="text-base leading-relaxed">
                                                                when you click on the pay online button you will
                                                                be redirected to payement stripe checkout page
                                                                where ypu will be asked details such as your card details
                                                                and personal information
                                                            </p>
                                                            <h3 class="underline">pay upon collection:</h3>
                                                            <p
                                                                class="text-base leading-relaxed ">
                                                                When you click on the pay upon collection, 
                                                                your will be generated and you will recieve the order
                                                                via email. 
                                                            </p>
                                                        </div>
                                                        <!-- Modal footer -->
                                                        <div
                                                            class="flex items-center p-6 space-x-2  border-t border-black rounded-b dark:border-gray-600">
                                                            <button data-modal-hide="payment-option" type="submit"
                                                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">I
                                                                pay upon collection
                                                            </button>
                                                            <button data-modal-hide="payment-option" type="submit"  id="checkout-live-button"
                                                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">
                                                                Pay online
                                                        </button>
                                                        </div>
                                                    </div>
                                                </div>

                                        </form>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>


    </div>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>
</body>
<script type="text/javascript">
    $(".cart_update").change(function(e) {
        e.preventDefault();

        var ele = $(this);

        $.ajax({
            url: '{{ route('update_cart') }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}',
                id: ele.parents("tr").attr("data-id"),
                quantity: ele.parents("tr").find(".quantity").val()
            },
            success: function(response) {
                window.location.reload();
            }
        });
    });

    $(".cart_remove").click(function(e) {
        e.preventDefault();

        var ele = $(this);

        if (confirm("Do you really want to remove?")) {
            $.ajax({
                url: '{{ route('remove_from_cart') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.parents("tr").attr("data-id")
                },
                success: function(response) {
                    window.location.reload();
                }
            });
        }
    });
</script>

</html>
