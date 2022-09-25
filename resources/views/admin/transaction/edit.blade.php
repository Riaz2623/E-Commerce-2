@extends('layouts.backend')

@section('main')

<div class="card">

    <div class="card-header p-0 justify-content-centrer d-flex">

        <h4 class="card-title text-center bg-white" style='border:1px solid; border-radius:10px;padding:20px 60px; width:100%;'><b>Transaction Edit</b></h4>

    </div>
    <div class="card-body">
        <div class="pull-left">
            <a class="btn btn-primary" href="{{route('section.manage')}}"> Manage Transaction</a>
        </div>
        </br>
        </br>
        <p class="text-center text-success">{{Session::get('message')}}</p>
        <form action="{{route('transaction.update',['id'=>$transactiontype->id])}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group row mb-4">
                <label for="horizontal-fullname-input" class="col-sm-3 col-form-label">Transaction Name</label>
                <div class="col-sm-9">
                    <input type="text" name="name" value="{{$transactiontype->name}}" class="form-control" placeholder="Transaction Name">

                </div>
            </div>
            <div class="form-group row justify-content-end">
                <div>
                    <button type="submit" class="btn btn-primary w-md">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>


</br>
</br>

</br>
</br>


@endsection