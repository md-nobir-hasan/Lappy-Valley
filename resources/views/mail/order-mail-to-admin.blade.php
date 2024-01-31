<h1 style="text-align: center;">A new order has created from {{$order->name}}</h1>
<h1 style="text-align: center;">Order Number {{$order->order_number}}</h1>
<h1 style="text-align: center;">Click to see details => <a href="{{env('APP_URL')}}/admin/order/{{$order->id}}"></a></h1>
