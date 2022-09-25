@extends('layouts.backend')

@section('main')
<div class="row">
    <div class="col-lg-12">
        <div class="card">


            <div class="card-header p-0 justify-content-centrer d-flex">

                <h4 class="card-title text-center bg-white" style='border:1px solid; border-radius:10px;padding:20px 60px; width:100%;'><b> Create Product Groups</b></h4>

            </div>
            <div class="card-body">
                <div class="pull-left">
                    <a class="btn btn-primary" href="{{route('productgroups.manage')}}"> Manage Product Groups</a>
                </div>
                </br>
                </br>
                <p class="text-center text-success">{{Session::get('message')}}</p>
                <form action="{{route('new.productgroups')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 row">

                        <div class="col-lg-3 pt-3">
                            <label for="name" class="">Product Groups Name</label>
                        </div>
                        <div class="col-lg-9 pt-3">
                            <div class="row">
                                <div class="col-lg-5">
                                    <input type="text" name="name" class="form-control" placeholder="Product Groups Name">
                                </div>
                                <div class="col-lg-2">G.S.Name</div>
                                <div class="col-lg-5">
                                    <select name="product_group_section_id" class="form-control" id="">
                                        <option value="">-- Select Group Section Name --</option>
                                        @foreach($productgroupsections as $productgroupsection)
                                        <option value="{{$productgroupsection->id}}"> {{$productgroupsection->name}} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="form-group row justify-content-end">
                        <div>
                            <button type="submit" class="btn btn-primary w-md ">Submit</button>
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