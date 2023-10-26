<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Woza Woza Kota Place</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
</head>

<body>
    @if (session('success'))
        <div class="container mx-auto">
            <div id="alert-3"class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                role="alert">
                <div class="ml-3 text-sm font-medium">
                    {{ session('success') }}
                </div>
                <button type="button"
                    class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"
                    data-dismiss-target="#alert-3" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>
        </div>
    @endif

    <div class="container">
        <div class='row'>
            <h1>Woza Woza Kota Place</h1>
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
                                                            width="100" height="100" class="img-responsive" />
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
                                            <input type='hidden' name="total" value="25">
                                            <input type='hidden' name="productname" value="Lebza Kota">
                                            <button class="btn btn-success" type="submit" id="checkout-live-button"><i
                                                    class="fa fa-money"></i> Checkout</button>
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
