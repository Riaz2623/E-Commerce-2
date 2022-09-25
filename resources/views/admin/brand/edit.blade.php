@extends('layouts.backend')

@section('main')

<div class="card">

    <div class="card-header p-0 justify-content-centrer d-flex">

        <h4 class="card-title text-center bg-white" style='border:1px solid; border-radius:10px;padding:20px 60px; width:100%;'><b>Brand Information Add</b></h4>

    </div>
    <div class="card-body">
        <div class="pull-left">
            <a class="btn btn-primary" href="{{route('brand.manage')}}"> Manage Brand</a>
        </div>
        </br>
        </br>
        <p class="text-center text-success">{{Session::get('message')}}</p>
        <form action="{{route('brand.update',['id'=>$brand->id])}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="input-group">
                <input type="text" name="name" value="{{$brand->name}}" class="form-control" placeholder="Brand Name">
                <div class="input-group-append">
                    <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                </div>
            </div>
            </br>


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