@extends('layouts.backend')

@section('main')

<div class="card">

    <div class="card-header p-0 justify-content-centrer d-flex">

        <h4 class="card-title text-center bg-white" style='border:1px solid; border-radius:10px;padding:20px 60px; width:100%;'><b>Manage Person</b></h4>

    </div>
    <div class="card-body">
        <div class="pull-left">
            <a class="btn btn-primary" href="{{route('person')}}"> Create Person</a>
        </div>
        </br>
        </br>
        <p class="text-center text-success">{{Session::get('message')}}</p>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Date of Joining</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">Email</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody> @foreach($persons as $person)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$person->name}}</td>
                        <td>{{$person->date}}</td>
                        <td>{{$person->mobile}}</td>
                        <td>{{$person->email}}</td>
                        <td>{{$person->status == 1 ? 'Active' : 'Inactive'}}</td>
                        <td>
                            <span class="btn btn-group">
                                <a href="{{route('person.edit',['id'=>$person->id])}}" class="btn btn-success btn-sm">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="{{route('person.status',['id'=>$person->id])}}" class="btn {{$person->status==1 ? 'btn-primary':'btn-warning'}} btn-sm">

                                    <i class=" {{$person->status==1 ? 'fa fa-arrow-up':'fa fa-arrow-down'}}"></i>
                                </a>
                                <a href="{{route('person.details',$person->id)}}" class="btn btn-info btn-sm">
                                    <i class="fa-solid fa-circle-info"></i>
                                </a>
                                <a href="{{route('person.delete',$person->id)}}" onclick="return confirm('Delete entry?')" class="btn btn-danger btn-sm">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </span>

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