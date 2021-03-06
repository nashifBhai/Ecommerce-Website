<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block !important;
        }
    </style>
    <div class="containers" style="padding:30px 0;">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-6">
                            Order Item
                        </div>
                        <div class="col-md-6">
                            <a href="{{  route('admin.orders')}}" class="btn btn-success pull-right">all orders</a>
                        </div>
                    <div class="panel-body">
                        <div class="wrap-iten-in-cart">            
                            <h3 class="box-title">Products Details</h3>
                            <ul class="products-cart">
                                @foreach ($order->orderItems as $item)
                                
                                <li class="pr-cart-item">
                                    <div class="product-image">
                                        <figure><img src="{{asset('assets/images/products')}}/{{$item->product->image}}" alt="{{$item->product->image}}"></figure>
                                    </div>
                                    <div class="product-name">
                                        <a class="link-to-product" href="{{route('product.details',['slug'=>$item->product->slug])}}">{{$item->product->name}}</a>
                                    </div>
                                    <div class="price-field produtc-price"><p class="price">$ {{$item->price}}</p></div>
                                    <div class="quantity">
                                        <h5>{{ $item->quantity }}</h5>
                                        
                                    </div>
                                    <div class="price-field sub-total"><p class="price">${{$item->price * $item->quantity}}</p></div>
                                </li>
                                @endforeach												
                            </ul>
                        </div>

                    </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-6">
                            Order Item
                        </div>
                        <div class="col-md-6">
                            <a href="{{  route('admin.orders')}}" class="btn btn-success pull-right">all orders</a>
                        </div>
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <th>Order ID</th>
                                    <td>{{ $order->id }}</td>
                                    <th>Order Date</th>
                                    <td>{{ $order->created_at }}</td>
                                    <th>Status</th>
                                    <td>{{ $order->status }}</td>
                                    @if($order->status=="delivered")
                                    <th>Delivery Date</th>
                                    <td>{{ $order->delivered_date }}</td>
                                    @elseif($order->status=="canceled")
                                    <th>Canceled Date</th>
                                    <td>{{ $order->canceled_date }}</td>
                                    @endif
                                </tr>
                            </table>

                        </div>
                    </div>
                    <div class="summary">
                        <div class="order-summary">
                            <h4 class="title-box">Order Summary</h4>
                            <p class="summary-info"><span class="title">Subtotal</span><b class="index">${{$order->subtotal}}</b></p>
                            <p class="summary-info"><span class="title">Tax</span><b class="index">${{$order->tax}}</b></p>
                            <p class="summary-info"><span class="title">Shipping</span><b class="index">Free Shipping</b></p>
                            <p class="summary-info"><span class="title">Total</span><b class="index">${{$order->total}}</b></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-md-6">
                                        Billing Details
                                    </div>
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                
                                                <th>Name</th>
                                                <td>{{ $order->firstname }} {{ $order->lastname }}</td>

                                            </tr>
                                            <tr>
                                                <th>Mobile</th>
                                                <td>{{ $order->mobile }}</td>
                                            <tr>
                                                <th>Email</th>
                                                <td>{{ $order->email }}</td>

                                            </tr>
                                            <tr>
                                                
                                                <th>Address</th>
                                                <td>{{ $order->line1 }} {{ $order->line2 }}</td>
                                                <th>

                                            </tr>
                                            <tr>
                                                
                                                <th>City, State</th>
                                                <td>{{ $order->city }},{{ $order->state }}</td>

                                            </tr>
                                            <tr>
                                                
                                                <th>Country</th>
                                                <td>{{ $order->country }}</td>
                                                

                                            </tr>
                                            <tr>
                                                <th>Zip Code</th>
                                                <td>{{ $order->zipcode }}</td>

                                            </tr>
                                            <tr>
                                                <th>Status</th>
                                                <td>{{ $order->status }}</td>

                                            </tr>
                                            <tr>
                                                <th>Order Date</th>
                                                <td>{{ $order->created_at }}</td>

                                            </tr>
                                        </thead> 
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        @if ($order->is_shipping_different)
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                                <div class="col-md-6">
                                                    Shipping Details
                                                </div>
                                                <div class="panel-body">
                                                <table class="table table-striped">
                                                        <tr>
                                                            
                                                            <th>Name</th>
                                                            <td>{{ $order->shipping->firstname }} {{ $order->shipping->lastname }}</td>
            
                                                        </tr>
                                                        <tr>
                                                            <th>Mobile</th>
                                                            <td>{{ $order->shipping->mobile }}</td>
                                                        <tr>
                                                            <th>Email</th>
                                                            <td>{{ $order->shipping->email }}</td>
            
                                                        </tr>
                                                        <tr>
                                                            
                                                            <th>Address</th>
                                                            <td>{{ $order->shipping->line1 }} {{ $order->shipping->line2 }}</td>
                                                            <th>
            
                                                        </tr>
                                                        <tr>
                                                            
                                                            <th>City, State</th>
                                                            <td>{{ $order->shipping->city }},{{ $order->shipping->state }}</td>
            
                                                        </tr>
                                                        <tr>
                                                            
                                                            <th>Country</th>
                                                            <td>{{ $order->shipping->country }}</td>
                                                            
            
                                                        </tr>
                                                        <tr>
                                                            <th>Zip Code</th>
                                                            <td>{{ $order->shipping->zipcode }}</td>
            
                                                        </tr>
                                                        <tr>
                                                            <th>Status</th>
                                                            <td>{{ $order->shipping->status }}</td>
            
                                                        </tr>
                                                        <tr>
                                                            <th>Order Date</th>
                                                            <td>{{ $order->shipping->created_at }}</td>
            
                                                        </tr>
                                            </table>
                                            </div>
                                        </div>
                                    </div>
                                @endif

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                Transaction Details
                                                            </div>
                                                            <div class="panel-body">
                                                                <table class="table table-striped">
                                                                    <thead>
                                                                        <tr>
                                                                            
                                                                            <th>Transaction Mode</th>
                                                                            <td>{{ $order->transaction->mode }} </td>
                            
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Status</th>
                                                                            <td>{{ $order->transaction->status }}</td>
                                                                        
                                                                        <tr>
                                                                            <th>Order Date</th>
                                                                            <td>{{ $order->transaction->created_at }}</td>
                            
                                                                        </tr>
                                                                    </thead> 
                                                                    <tbody>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                
                </div>
            </div>
        </div>
    </div>
</div>
