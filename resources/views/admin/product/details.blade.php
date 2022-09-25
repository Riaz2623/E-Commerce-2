@extends('layouts.backend')

@section('main')


<div class="container">
    <div class="pull-left">
        <a class="btn btn-primary" href="{{route('product.manage')}}"> Manage Product</a>
    </div>
    </br>
    </br>
    <div class="row col-md-12">
        <div class="row col-md-4">
            <div class="ps-lg-1-6 ps-xl-5">
                <img src="{{asset($product->photo)}}" alt="..." height="250">
            </div>
        </div>
        <div class="col-md-8">
            <div class="ps-lg-1-6 ps-xl-5">
                <div><span>
                        <h3><b>{{$product->name}}</b>
                            <h3>
                    </span></div></br>
                <h4 class="mb-0 text-mb-primary">Description</h4>
                <div>{!! $product->description !!}</div>
            </div>
        </div>
    </div>
    <br>
    <div class="row col-md-12">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Offer Price</th>
                        <th scope="col">Regular Price</th>
                        <th scope="col">Offer Discount</th>
                        <th scope="col">Weight</th>
                        <th scope="col">Bar_Code</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$product->offerprice}}</td>
                        <td>{{$product->regularprice}}</td>
                        <td>{{$product->offerdiscount}}</td>
                        <td>{{$product->weight}}</td>
                        <td>{{$product->bar_code}}</td>
                    </tr>
                </tbody>
                <thead>
                    <tr>
                        <th scope="col">Category</th>
                        <th scope="col">Section</th>
                        <th scope="col">Brand</th>
                        <th scope="col">Manufacturer</th>
                        <th scope="col">UOM</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{\App\Models\Section::find($product->section_id)->name }}</td>
                        <td>{{\App\Models\Category::find($product->category_id)->name }}</td>
                        <td>{{\App\Models\Brands::find($product->brand_id)->name }}</td>
                        <td>{{\App\Models\Manufacure::find($product->manufacturer_id)->name }}</td>
                        <td>{{\App\Models\UOM::find($product->uom_id)->name }}</td>
                    </tr>
                </tbody>

            </table>
        </div>

    </div>

</div>

@endsection