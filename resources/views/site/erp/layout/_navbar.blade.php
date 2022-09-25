<div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.html"><img src="{{asset('/')}}assets/img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="{{route('home')}}">Home</a></li>
                            <li><a href="{{route('shop')}}">Shop</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="{{route('shop.details')}}">Shop Details</a></li>
                                    <li><a href="{{route('shoping.cart')}}">Shoping Cart</a></li>
                                    <li><a href="{{route('check.out')}}">Check Out</a></li>
                                    <li><a href="{{route('blog.details')}}">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="{{route('blog')}}">Blog</a></li>
                            <li><a href="{{route('contact')}}">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                            <li><a href="{{route('shoping.cart')}}"><i class="fa fa-shopping-bag"></i> <span>
                              
                               <?php
                                use Illuminate\Support\Facades\DB;
                               
                                $session_id = session()->getId();
                                echo  $counts_id =DB ::table('carts')->where('s_id', '=', $session_id)->count();
                                ?>
                           
                            </span></a></li>
                        </ul>
                        <div class="header__cart__price">item: <span>$150.00</span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>