@extends('layouts.backend')

@section('main')
<!-- <div class="clearfix"></div> -->
               
               <div class="row">
               <div class="container-xl px-4 mt-4">
    <!-- Account page navigation-->
    
    <?php
    // session_start();
    use App\Models\Admin;
    // $id= $_SESSION["LoggedUser"] ;
    $id = session()->get('LoggedUser');
    $data = Admin::find($id); ?>
    
    <form method="POST" action ="#"  enctype="multipart/form-data">
    <div class="row">
        <div class="col-xl-4">
            <!-- Profile picture card-->
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">Profile Picture</div>
                <div class="card-body text-center">
                    <!-- Profile picture image-->
                    <img class="img-account-profile rounded-circle mb-2" src="{{asset('upload/register/'.$data->photo)}}" alt="">
                    <!-- Profile picture help block-->
                   
       
                    
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header">Account Details</div>
                <div class="card-body">
                  
                        <!-- Form Group (username)-->
                        @csrf
                           
               
                        <div class="mb-3">
                            <label class="small mb-1" for="inputUsername">Username (how your name will appear to other users on the site)</label>
                            <input class="form-control" name="name" id="inputUsername" type="text"  value="{{$data->name}}" disabled>
                        </div>
                             
                       
                        <!-- Form Group (email address)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputEmailAddress">Email address</label>
                            <input class="form-control" name="email" id="inputEmailAddress" type="email" placeholder="Enter your email address" value="{{$data->email}}" disabled>
                        </div>
                        <!-- Form Row-->

                     
                  
                </div>
            </div>
        </div>
    </div>
    </form>
</div>
            
            
            </div>
            <!-- .animated -->
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>

@endsection