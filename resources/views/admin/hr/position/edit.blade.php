@extends('layouts.backend')

@section('main')
<div class="card">

    <div class="card-header p-0 justify-content-centrer d-flex">

        <h4 class="card-title text-center bg-white" style='border:1px solid; border-radius:10px;padding:20px 60px; width:100%;'><b>Position Edit</b></h4>

    </div>
    <div class="card-body">
        <div class="pull-left">
            <a class="btn btn-primary" href="{{route('position.manage')}}"> Manage Position</a>
        </div>
        </br>
        </br>
        <p class="text-center text-success">{{Session::get('message')}}</p>
        <form action="{{route('position.update',['id'=>$position->id])}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="input-group">
                <div class="input-group-append  w-30 px-2">
                    <select class="form-control" name="department_id">
                        <option> -- Select Department Name -- </option>
                        @foreach($departmens as $departmen)
                        <option value="{{$departmen->id}}"> {{$departmen->name}} </option>
                        @endforeach
                    </select>
                </div>
                <input type="text" name="name" value="{{$position->name}}" class="form-control" placeholder="Position Name">
                <span class="input-group-text"><i class="fa-solid fa-user"></i></span>

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

@endsection