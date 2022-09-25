<h1>Forget Password Email</h1>

@if(Session::get('success'))
<div class="alert alert-danger">
    {{ Session::get('success') }}
</div>
@endif

You can reset password from below link!!

<a href="{{route('reset.password.get',$token)}}">Reset Password</a>