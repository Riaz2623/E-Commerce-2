@extends('layouts.backend')

@section('main')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <?php

            use App\Models\Product;
            use App\Models\ProductGroup;

            $productgroup = ProductGroup::find($productgroupdetail->productgroups_id)->name;
            $product = Product::find($productgroupdetail->product_id)->name;
            ?>
            <div class="card-header p-0 justify-content-centrer d-flex">

                <h4 class="card-title text-center bg-white" style='border:1px solid; border-radius:10px;padding:20px 60px; width:100%;'><b> Edit Product Group Details</b></h4>

            </div>
            <div class="card-body">
                <div class="pull-left">
                    <a class="btn btn-primary" href="{{route('productgroupdetails.manage')}}"> Manage Product Group Details</a>
                </div>
                </br>
                </br>
                <p class="text-center text-success">{{Session::get('message')}}</p>
                <form action="{{route('productgroupdetails.update',['id'=>$productgroupdetail->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 row">

                        <div class="col-lg-3 pt-3">
                            <label for="name" class="">Product Groups Name</label>
                        </div>
                        <div class="col-lg-9 pt-3">
                            <div class="row">
                                <div class="col-lg-5">
                                    <select name="productgroups_id" class="form-control" id="">
                                        <option value="{{$productgroupdetail->productgroups_id}}">{{$productgroup}}</option>
                                        @foreach($productgroups as $productgroups)
                                        <option value="{{$productgroups->id}}"> {{$productgroups->name}} </option>
                                        @endforeach
                                    </select>

                                </div>
                                <div class="col-lg-2">Product Name</div>
                                <div class="col-lg-5">
                                    <select name="product_id" class="form-control" id="">
                                        <option value="{{$productgroupdetail->product_id}}">{{ $product}}</option>

                                    </select>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="form-group row justify-content-end">
                        <div>
                            <button type="submit" class="btn btn-primary w-md">Updete</button>
                        </div>
                    </div>
            </div>
            </form>
        </div>
    </div>


</div>
</div>
</br>
</br>
</br>



@endsection