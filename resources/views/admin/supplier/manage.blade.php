@extends('layouts.backend')

@section('main')

<div class="card">

    <div class="card-header p-0 justify-content-centrer d-flex">

        <h4 class="card-title text-center bg-white" style='border:1px solid; border-radius:10px;padding:20px 60px; width:100%;'><b>Manage supplier</b></h4>

    </div>
    <div class="card-body">
        <div class="pull-left">
            <a class="btn btn-primary" href="{{route('manufacfure')}}"> Create supplier</a>
        </div>
        </br>
        </br>
        <p class="text-center text-success">{{Session::get('message')}}</p>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Sl No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">Address</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody> @foreach($suppliers as $supplier)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$supplier->name}}</td>
                        <td>{{$supplier->mobile}}</td>
                        <td>{{$supplier->address}}</td>
                        <td>{{$supplier->email}}</td>
                        <td>
                            <a href="{{route('supplier.edit',['id'=>$supplier->id])}}" class="btn btn-success btn-sm">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a href="{{route('supplier.delete',$supplier->id)}}" onclick="return confirm('Delete entry?')" class="btn btn-danger btn-sm">
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