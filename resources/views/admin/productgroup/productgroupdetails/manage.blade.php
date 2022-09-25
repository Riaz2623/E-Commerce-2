@extends('layouts.backend')

@section('main')

<div class="card">


    <div class="card-header p-0 justify-content-centrer d-flex">

        <h4 class="card-title text-center bg-white" style='border:1px solid; border-radius:10px;padding:20px 60px; width:100%;'><b>Manage Product Groups</b></h4>

    </div>

    <div class="card-body">
        <div class="pull-left">
            <a class="btn btn-primary" href="{{route('productgroupdetails')}}"> Create Product Groups</a>
        </div>
        </br>
        </br>
        <p class="text-center text-success">{{Session::get('message')}}</p>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Sl No</th>
                        <th scope="col">Product_Groups_Name</th>
                        <th scope="col">Product_Name</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody> @foreach($productgroupdetails as $productgroupdetail)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{\App\Models\ProductGroup::find($productgroupdetail->productgroups_id)->name }}</td>
                        <td>{{\App\Models\Product::find($productgroupdetail->product_id)->name }}</td>
                        <td>
                            <a href="{{route('productgroupdetails.edit',['id'=>$productgroupdetail->id])}}" class="btn btn-success btn-sm">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a href="{{route('productgroupdetails.details',$productgroupdetail->id)}}" class="btn btn-info btn-sm">
                                <i class="fa-solid fa-circle-info"></i>
                            </a>
                            <a href="{{route('productgroupdetails.delete',$productgroupdetail->id)}}" onclick="return confirm('Delete entry?')" class="btn btn-danger btn-sm">
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





</br>

</br>
</br>
</br>
</br>
@endsection