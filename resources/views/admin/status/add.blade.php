@extends('layouts.backend')

@section('main')
<div class="row">
    <div class="col-lg-12">
        <div class="card">

            <div class="card-header p-0 justify-content-centrer d-flex">

                <h4 class="card-title text-center bg-white" style='border:1px solid; border-radius:10px;padding:20px 60px; width:100%;'><b> Create Status</b></h4>

            </div>
            <div class="card-body">
                <div class="pull-left">
                    <a class="btn btn-primary" href="{{route('status.manage')}}"> Manage status</a>
                </div>
                </br>
                </br>
                <p class="text-center text-success">{{Session::get('message')}}</p>
                <form action="{{route('new.status')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group row mb-4">
                        <label for="horizontal-fullname-input" class="col-sm-3 col-form-label">Status Name</label>
                        <div class="col-sm-9">
                            <input type="text" name="name" class="form-control" placeholder="Status Name">

                        </div>
                    </div>


                    <div class="form-group row justify-content-end">

                        <div>

                            <button type="submit" class="btn btn-primary w-md">Submit</button>

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
</br>


@endsection