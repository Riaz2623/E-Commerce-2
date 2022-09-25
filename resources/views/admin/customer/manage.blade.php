@extends('layouts.backend')

@section('main')

<div class="card">

    <div class="card-header p-0 justify-content-centrer d-flex">

        <h4 class="card-title text-center bg-white" style='border:1px solid; border-radius:10px;padding:20px 60px; width:100%;'><b>Manage Manufacure</b></h4>

    </div>
    <div class="card-body">
        <div class="pull-left">
            <a class="btn btn-primary" href="{{route('manufacfure')}}"> Create Manufacure</a>
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
                        <th scope="col">Email</th>
                        <th scope="col">Address</th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody> @foreach($customers as $customer)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$customer->name}}</td>
                        <td>{{$customer->mobile}}</td>
                        <td>{{$customer->address}}</td>
                        <td>{{$customer->email}}</td>
                        <td><img src="{{asset($customer->image)}}" alt="" height="50" wight="50"></td>
                        <td>

                            <a href="{{route('customer.delete',$customer->id)}}" onclick="return confirm('Delete entry?')" class="btn btn-danger btn-sm">
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