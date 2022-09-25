@extends('layouts.backend')

@section('main')

<section style="background-color: #eee;">
  <div class="container py-3">

    <div class="card-header p-0 justify-content-centrer d-flex">

      <h4 class="card-title text-center bg-white" style='border:1px solid; border-radius:10px;padding:20px 60px; width:100%;'><b>Person Details</b></h4>

    </div>
    <div class="pull-left">
      <a class="btn btn-primary" href="{{route('person.manage')}}"> Manage Person</a>
    </div>
    </br>
    </br>
    <div class="row">

      <div class="col-lg-4">


        <div class="card mb-4">

          <div class="card-body text-center">
            <img src="{{asset($person->image)}}" alt="avatar" class="" style="width: 150px;">
            </br>
            </br>
            <h3 class="my-2"><b>{{$person->name}}</b></h3>
            <th>
              <h4>{{$person->email}}</h4>
            </th> </br>


          </div>
        </div>

      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Full Name</p>
              </div>
              <div class="col-sm-9">
                <th>{{$person->name}}</th>

              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Position Name</p>
              </div>
              <div class="col-sm-9">
                <td>{{\App\Models\Position::find($person->possion_id)->name }}</td>

              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Phone</p>
              </div>
              <div class="col-sm-9">
                <th>{{$person->mobile}}</th>

              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Gender</p>
              </div>
              <div class="col-sm-9">
                <th>{{$person->gender}}</th>

              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Date of Joining</p>
              </div>
              <div class="col-sm-9">
                <th>{{$person->date}}</th>

              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Address</p>
              </div>
              <div class="col-sm-9">
                <th>{{$person->address}}</th>
              </div>
            </div>



          </div>
        </div>

      </div>
    </div>
  </div>
</section>
@endsection