<div>
    
    <div class="containers" style="padding:30px 0;"></div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-6">
                            All Coupons
                        </div>
                        
                        <div class="col-md-6">
                            <a href="{{ route('admin.addcoupon') }}" class="btn btn-success pull-right">Add New Coupon</a>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    @if (Session::has('message'))
                        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                    @endif
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Coupon Code</th>
                                <th>Copon Type</th>
                                <th>Value</th>
                                <th>Minimum Cart Value</th>
                                <th>Expiry Date</th>
                                <th>Action</th>
                            </tr>
                        </thead> 
                        <tbody>
                            @foreach ($coupons as $coupon)
                            <tr>
                                <td>{{ $coupon->id }}</td>
                                <td>{{ $coupon->code }}</td>
                                <td>{{ $coupon->type }}</td>
                                @if ($coupon->type == 'fixed')
                                    <td>${{ $coupon->value }}</td>
                                    
                                @else
                                    <td>{{ $coupon->value }} %</td>
                                
                                @endif
                                <td>{{ $coupon->cart_value }}</td>
                                <td>{{ $coupon->expiry_date }}</td>
                                <td>
                                    <a href="{{ route('admin.editcoupon',['coupon_id'=>$coupon->id]) }}"><i class="fa fa-edit fa-2x"></i></a>
                                    <a href="#" onclick="confirm('Are you sure?')||event.stopImmediatePropagation()" style="margin-left:10px;" wire:click.prevent="deleteCoupon({{ $coupon->id }})"><i class="fa fa-times fa-2x text-danger"></i></a>
                                </td>
                            </tr>
                                
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
