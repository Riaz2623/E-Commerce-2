@extends('layouts.backend')

@section('main')
<div class="card">

    <div class="card-header p-0 justify-content-centrer d-flex">

        <h4 class="card-title text-center bg-white" style='border:1px solid; border-radius:10px;padding:20px 60px; width:100%;'><b>Create Category</b></h4>

    </div>
    <div class="card-body">
        <div class="pull-left">
            <a class="btn btn-primary" href="{{route('category.manage')}}"> Manage Category</a>
        </div>
        </br>
        </br>
        <p class="text-center text-success">{{Session::get('message')}}</p>
        <form action="{{route('new.category')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="input-group">
                <input type="text" name="name" class="form-control" placeholder="Category Name">
                <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                <div class="input-group-append  w-50 px-2">
                    <select class="form-control" name="section_id">
                        <option> -- Select Section Name -- </option>
                        @foreach($sections as $section)
                        <option value="{{$section->id}}"> {{$section->name}} </option>
                        @endforeach
                    </select>
                </div>
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


</br>
</br>
</br>

@endsection