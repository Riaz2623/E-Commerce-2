@extends('layouts.backend')

@section('main')


<div class="container-xl px-4 mt-4">
    <!-- Account page navigation-->
    <nav class="nav nav-borders">
         <!-- <a class="nav-link active ms-0" href="https://www.bootdey.com/snippets/view/bs5-edit-profile-account-details" target="__blank">Profile</a>
         <a class="nav-link" href="https://www.bootdey.com/snippets/view/bs5-profile-billing-page" target="__blank">Billing</a>
        <a class="nav-link" href="https://www.bootdey.com/snippets/view/bs5-profile-security-page" target="__blank">Security</a>
        <a class="nav-link" href="https://www.bootdey.com/snippets/view/bs5-edit-notifications-page"  target="__blank">Notifications</a> -->
    </nav>
                            <?php
                            // session_start();
                            use App\Models\Admin;
                            // $id= $_SESSION["LoggedUser"] ;
                            $id = session()->get('LoggedUser');

                            
                        
                            $data = Admin::find($id); 

                          

                    
                            
                            ?>
    <hr class="mt-0 mb-4">
    <form method="POST" action ="{{url('/auth.update/'.$data->id)}}"  enctype="multipart/form-data">
    <div class="row">
        <div class="col-xl-4">
            <!-- Profile picture card-->
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">Profile Picture</div>
                <div class="card-body text-center">
                    <!-- Profile picture image-->
                    <img class="img-account-profile rounded-circle mb-2" src="{{asset('upload/register/'.$data->photo)}}" alt="">
                    <!-- Profile picture help block-->
                    <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 2 MB</div>
                    <!-- Profile picture upload button-->
                    <input class="btn btn-primary col-sm-12" type="file" name="photo" value="" class="form-control" >
                   
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
                            <input class="form-control" name="name" id="inputUsername" type="text"  value="{{$data->name}}">
                        </div>
                             
                       
                        <!-- Form Group (email address)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputEmailAddress">Email address</label>
                            <input class="form-control" name="email" id="inputEmailAddress" type="email" placeholder="Enter your email address" value="{{$data->email}}">
                        </div>
                        <!-- Form Row-->

                        <!-- Save changes button-->
                        <button class="btn btn-primary" type="submit">Save changes</button>
                  
                </div>
            </div>
        </div>
    </div>
    </form>
</div>

@endsection