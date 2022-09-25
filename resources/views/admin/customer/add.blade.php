@extends('layouts.backend')

@section('main')

<div class="card">

  <div class="card-header p-0 justify-content-centrer d-flex">

    <h4 class="card-title text-center bg-white" style='border:1px solid; border-radius:10px;padding:20px 60px; width:100%;'><b> Create Customer</b></h4>

  </div>
  <div class="card-body">
    <p class="text-center text-success">{{Session::get('message')}}</p>
    <form action="{{route('new.customer')}}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="input-group">
        <input type="text" name="name" class="form-control" placeholder="Customer Name">
        <div class="input-group-append">
          <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
        </div>
      </div>
      </br>
      <div class="input-group">
        <input type="number" name="mobile" class="form-control" placeholder="Mobile Name">
        <div class="input-group-append">
          <span class="input-group-text"><i class="fa-solid fa-mobile"></i></span>
        </div>
      </div>
      </br>
      <div class="input-group">
        <input type="email" name="email" class="form-control" placeholder="Email Name">
        <div class="input-group-append">
          <span class="input-group-text"><i class="fa-solid fa-envelope"></i></i></span>
        </div>
      </div>
      </br>
      <div class="input-group">
        <input type="text" name="address" class="form-control" placeholder="Address Name">
        <div class="input-group-append">
          <span class="input-group-text"><i class="fa-solid fa-location-dot"></i></span>
        </div>
      </div>
      </br>

      <div class="input-group">
        <input type="file" name="image" class="form-control-file" />
      </div>
      </br>


      <div class="form-group row justify-content-end">

        <div>

          <button type="submit" class="btn btn-primary w-md">Submit</button>

        </div>
      </div>


    </form>
  </div>
</div>





@endsection