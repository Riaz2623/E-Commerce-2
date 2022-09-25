@extends('layouts.backend')

@section('main')
<div class="row">
    <div class="col-lg-12">
        <div class="card">


            <div class="card-header p-0 justify-content-centrer d-flex">

                <h4 class="card-title text-center bg-white" style='border:1px solid; border-radius:10px;padding:20px 60px; width:100%;'><b> Create Person</b></h4>

            </div>
            <div class="card-body">
                <div class="pull-left">
                    <a class="btn btn-primary" href="{{route('person.manage')}}"> Manage Person</a>
                </div>
                </br>
                </br>
                <p class="text-center text-success">{{Session::get('message')}}</p>
                <form action="{{route('person.update',['id'=>$person->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 row">
                        <div class="col-lg-3">
                            <label for="name" class="">Name</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" name="name" value="{{$person->name}}" class="form-control" id="name">
                        </div>
                        <div class="col-lg-3 pt-3">
                            <label for="name" class="">Possion Name</label>
                        </div>
                        <div class="col-lg-9 pt-3">
                            <div class="row">
                                <div class="col-lg-5">
                                    <select name="possion_id" class="form-control" id="">
                                        <option value="">-- Select Possion Name -- </option>
                                        @foreach($positions as $position)
                                        <option value="{{$position->id}}"> {{$position->name}} </option>
                                        @endforeach
                                    </select>

                                </div>
                                <div class="col-lg-2">Gender</div>
                                <div class="col-lg-5">
                                    <select name="gender" class="form-control" id="">
                                        <option value="">-- Select Gender Name --</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Custom">Custom</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="form-group row mb-4">
                        <label for="horizontal-fullname-input" class="col-sm-3 col-form-label">Date of Joining</label>
                        <div class="col-sm-3">
                            <input type="date" name="date" value="{{$person->date}}" class="form-control" placeholder="">

                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label for="horizontal-fullname-input" class="col-sm-3 col-form-label">Mobile Number</label>
                        <div class="col-sm-9">
                            <input type="number" name="mobile" value="{{$person->mobile}}" class="form-control" placeholder="Mobile Number">

                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="horizontal-fullname-input" class="col-sm-3 col-form-label">Email Address</label>
                        <div class="col-sm-9">
                            <input type="email" name="email" value="{{$person->email}}" class="form-control" placeholder="Email Address">

                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="horizontal-fullname-input" class="col-sm-3 col-form-label">Address</label>
                        <div class="col-sm-9">
                            <input type="text" name="address" value="{{$person->address}}" class="form-control" placeholder="Address Name">

                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="horizontal-fullname-input" class="col-sm-3 col-form-label">Image</label>
                        <div class="col-sm-9">
                            <input type="file" name="image" class="form-control-file" placeholder="Address Name">

                            <img src="{{asset($person->image)}}" alt="" width="120" height="120">

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



@endsection