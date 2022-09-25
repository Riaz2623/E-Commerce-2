@extends('layouts.backend')

@section('main')

<div class="card">


    <div class="card-header p-o justify-content-centrer d-flex">

        <h4 class="card-title text-center bg-white" style='border:1px solid; border-radius:10px;padding:20px 60px; width:100%;'><b>Manage Position</b></h4>

    </div>

    <div class="card-body">
        <div class="pull-left">
            <a class="btn btn-primary" href="{{route('position')}}"> Create Position</a>
        </div>
        </br>
        </br>
        <p class="text-center text-success">{{Session::get('message')}}</p>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Sl No</th>
                        <th scope="col">department_Name</th>
                        <th scope="col">Name</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody> @foreach($positions as $position)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{\App\Models\Departmen::find($position->department_id)->name }}</td>
                        <td>{{$position->name}}</td>
                        <td>
                            <a href="{{route('position.edit',['id'=>$position->id])}}" class="btn btn-success btn-sm">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a href="{{route('position.delete',$position->id)}}" onclick="return confirm('Delete entry?')" class="btn btn-danger btn-sm">
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