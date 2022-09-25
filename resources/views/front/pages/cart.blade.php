@extends('layout.site')

@section('main')
<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="{{asset('/')}}assets/img/breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Shopping Cart</h2>
                    <div class="breadcrumb__option">
                        <a href="./index.html">Home</a>
                        <span>Shopping Cart</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Shoping Cart Section Begin -->
<section class="shoping-cart spad">
    <div class="container">
   
        <div class="row">
       
            <div class="col-lg-12">
                <div class="shoping__cart__table">
                    <table>
                        <thead>
                            <tr>
                                <th class="shoping__product">Products</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            
                            $cost=0;
                            

                            // print_r($peoduct);
                            
                            ?>

                            @foreach($peoduct AS $pducts)
                            <tr>
                                <td class="shoping__cart__item">
                                    <img src="{{asset($pducts->photo)}}" alt="" style="height: 100px;">
                                    <h5>{{$pducts->name}}</h5>
                                </td>
                                <td class="shoping__cart__price">
                                    ${{$pducts->regularprice}}
                                </td>
                                <td class="justify-content-center">
                                    <form action="{{url('cart-update')}}" method="POST">
                                        @csrf
                                    <div class="d-flex">
                                        <div class=" w-25">
                                            <input type="number" name="up_qty" class=" form-control" value="{{ $pducts->quantity}}">
                                            <input type="hidden" name="product_id" value="{{ $pducts->id }}" >
                                        </div>
                                        <div class="p-1">
                                            <button class="btn btn-success">update</button>
                                        </div>
                                    </div>
                                   </form>
                                </td>
                                <td>
                                    <div class="d-flex">

                                    </div>
                                </td>
                                <td class="shoping__cart__total">
                                    <?php  $a= $pducts->regularprice * $pducts->quantity ?>
                                ${{$a}}
                                </td>
                                    <td class="shoping__cart__item__close">
                                       <a href="{{route('cart.delete',$pducts->id)}}" > <span class="icon_close"></span></a>
                                    </td>
                              </tr>
                           
                              <?php 
                            
                              $cost= $cost + $a ;
                              
                              ?>

                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
           
        </div>
        
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping__cart__btns">
                    <a href="#" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
                    
                </div>
            </div>
            <div class="col-lg-6">
                <div class="shoping__continue">
                    <div class="shoping__discount">
                        <h5>Discount Codes</h5>
                        <form action="#">
                            <input type="text" placeholder="Enter your coupon code">
                            <button type="submit" class="site-btn">APPLY COUPON</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="shoping__checkout">
                    <h5>Cart Total</h5>
                    <ul>
                        
                        <li>Subtotal <span>$454.98</span></li>
                        <li>Total <span>${{$cost}}</span></li>
                    </ul>
                    <a href="#" class="primary-btn" wire:click.prevent="checkout">PROCEED TO CHECKOUT</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shoping Cart Section End -->
@endsection