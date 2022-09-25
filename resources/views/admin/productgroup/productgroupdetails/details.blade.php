@extends('layouts.backend')

@section('main')

<section style="background-color: #eee;">
    <div class="container py-3">

        <div class="card-header p-0 justify-content-centrer d-flex">

            <h4 class="card-title text-center bg-white" style='border:1px solid; border-radius:10px;padding:20px 60px; width:100%;'><b>Product Groups Details</b></h4>

        </div>
       

        <div class="row">
            @foreach ($products as $product)
            <div class="col-lg-4">


                <div class="card mb-1">

                    <div class="card-body text-center">
                        <img src="{{asset($product->photo)}}" alt="avatar" width: 250px; height="270">
                        </br>
                        </br>
                    </div>
                </div>
                <div class="card ">

                    <div class="card-body text-center pull-left">

                        <a class="btn alert-secondary  border-radius:5px;" href="{{route('productgroupdetails.manage')}}">Manage Product Group</a>

                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Product_Name</p>
                            </div>
                            <div class="col-sm-9">
                                <th>
                                    <h3>{{$product->name }}</h3>
                                </th>

                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Product_Group</p>
                            </div>
                            <div class="col-sm-9">
                                <td>{{\App\Models\ProductGroup::find($productgroupdetail->productgroups_id)->name }}</td>

                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Offer Price</p>
                            </div>
                            <div class="col-sm-9">

                                <th>{{$product->offerprice }}</th>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Regular Price</p>
                            </div>
                            <div class="col-sm-9">
                                <th>{{$product->regularprice }}</th>

                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Offer Discount</p>
                            </div>
                            <div class="col-sm-9">
                                <th>{{$product->offerdiscount}}</th>

                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Weight</p>
                            </div>
                            <div class="col-sm-9">
                                <th>{{$product->weight}}</th>

                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Bar_Code</p>
                            </div>
                            <div class="col-sm-9">
                                <th>{{$product->bar_code}}</th>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            @endforeach
        </div>
        
    </div>
</section>
@endsection