@extends('layouts.backend')

@section('main')
    <div class="row">
        <div class="col-lg-12">
            <div class="card" >
            
                 
                <div class="card-header p-0 justify-content-centrer d-flex">

                    <h4 class="card-title text-center bg-white" style='border:1px solid; border-radius:10px;padding:20px 60px; width:100%;'><b> Create Manufacfures</b></h4>

                </div>
                <div class="card-body">
                    <div class="pull-left">
                        <a class="btn btn-primary" href="{{route('manufacfure.manage')}}"> Manage Manufacfure</a>
                    </div>
                    </br>
                    </br>
                    <p class="text-center text-success">{{Session::get('message')}}</p>
                    <form action="{{route('new.manufacfure')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group row mb-4">
                                    <label for="horizontal-fullname-input" class="col-sm-3 col-form-label">Manufacfurer Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="name" class="form-control" id="horizontal-firstname-input" placeholder="Manufacfures Name">
                                        
                                    </div>
                            </div>
                            <div class="form-group row mb-4">
                                    <label for="horizontal-fullname-input" class="col-sm-3 col-form-label">Mobile Number</label>
                                    <div class="col-sm-9">
                                    <input type="number" name="mobile" class="form-control" placeholder="Mobile Number" >
                                        
                                    </div>
                            </div>
                            <div class="form-group row mb-4">
                                    <label for="horizontal-fullname-input" class="col-sm-3 col-form-label">Email Address</label>
                                    <div class="col-sm-9">
                                        <input type="email" name="email" class="form-control" placeholder="Email Address" >
                                        
                                    </div>
                            </div>
                            <div class="form-group row mb-4">
                                    <label for="horizontal-fullname-input" class="col-sm-3 col-form-label">Address</label>
                                    <div class="col-sm-9">
                                    <input type="text" name="address" class="form-control" placeholder="Address Name" >
                                        
                                    </div>
                            </div>
                        <div class="form-group row justify-content-end">
                            <div >
                                <button type="submit" class="btn btn-primary w-md">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

    
        </div>
    </div>



         @endsection