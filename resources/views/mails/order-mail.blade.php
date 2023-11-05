
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order Confirmation</title>
</head>
<body>
    <p> Hi {{$order->user->email}}</p>
    <p> Your order has been successfully placed.</p>
    <br>
    <table style="width: 600px; text-align:right;">
        <thead>
            <tr>
                
                <th>Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Sub_Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($order->orderitems as $item)
                <tr>
                    <td>{{$item->product->product_name}}</td>
                    <td>{{$item->quantity}}</td>
                    <td>R{{$item->unit_price}}</td>
                    <td>R{{$item->unit_price * $item->quantity}}</td>
                </tr>
            @endforeach
             <tr>
                <td style="border-top:1px solid #ccc;" colspan="3"></td>
                <td style="font-size: 15px; font-weight:bold; border-top:1px solid #ccc;">Order no :  {{$order->order_no}}</td>
            </tr>
            <tr>
                <td colspan="3"></td>
                <td style="font-size: 22px; font-weight:bold;">Total  :  R{{$order->total_price}}</td>
            </tr>
           
        </tbody>
    </table>
</body>
</html>