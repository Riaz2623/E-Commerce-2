@extends('layouts.backend')

@section('main')

<div class="card">

    <div class="card-header p-0 justify-content-centrer d-flex">

        <h4 class="card-title text-center bg-white" style='border:1px solid; border-radius:10px;padding:20px 60px; width:100%;'><b>Manage product</b></h4>

    </div>
    <div class="card-body">
        <div class="pull-left">
            <a class="btn btn-primary" href="{{route('product')}}">Create Product</a>
        </div>
        </br>
        </br>
        <p class="text-center text-success">{{Session::get('message')}}</p>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Offer Price</th>
                        <th scope="col">Regular Price</th>
                        <th scope="col">Photo</th>

                        <th scope="col">Offer Discount</th>

                        <th scope="col">Category_Id</th>

                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody> @foreach($products as $product)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->offerprice}}</td>
                        <td>{{$product->regularprice}}</td>
                        <td><img src="{{asset($product->photo)}}" alt="" height="50" wight="50"></td>

                        <td>{{$product->offerdiscount}}</td>

                        <td>{{\App\Models\Category::find($product->category_id)->name }}</td>

                        <td>
                            <a href="{{route('product.edit',['id'=>$product->id])}}" class="btn btn-success btn-sm">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a href="{{route('product.details',$product->id)}}" class="btn btn-info btn-sm">
                                <i class="fa-solid fa-circle-info"></i>
                            </a>
                            <a href="{{route('product.delete',$product->id)}}" onclick="return confirm('Delete entry?')" class="btn btn-danger btn-sm">
                                <i class="fa fa-trash"></i>
                            </a>

                        </td>
                    </tr>

                    @endforeach


                </tbody>
            </table>
        </div>

    </div>
</div>

@endsection