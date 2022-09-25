@extends('layouts.backend')

@section('main')

<div class="card">


    <div class="card-header p-0 justify-content-centrer d-flex">

        <h4 class="card-title text-center bg-white" style='border:1px solid; border-radius:10px;padding:20px 60px; width:100%;'><b>Manage Product Groups Name</b></h4>

    </div>

    <div class="card-body">
        <div class="pull-left">
            <a class="btn btn-primary" href="{{route('productgroups')}}"> Create Product Groups</a>
        </div>
        </br>
        </br>
        <p class="text-center text-success">{{Session::get('message')}}</p>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Sl No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Section_Name</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody> @foreach($productgroups as $productgroup)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$productgroup->name}}</td>
                        <td>{{\App\Models\ProductGroupSection::find($productgroup->product_group_section_id)->name }}</td>
                        <td>
                            <a href="{{route('productgroups.edit',['id'=>$productgroup->id])}}" class="btn btn-success btn-sm">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a href="{{route('productgroups.delete',$productgroup->id)}}" onclick="return confirm('Delete entry?')" class="btn btn-danger btn-sm">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>

                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>





</br>

</br>
</br>
</br>
</br>
@endsection