@extends('layout.auth-master')
@section('content')
   <h1>Login</h1>
   <form action="{{route('login.loginUser')}}" method="post">
        @csrf
        

        <div class="form-group mb-2">
                <input type="text" name="name" id="" class="form-control" placeholder="Username" required>
            
        </div>
        @if ($errors->has('name'))
        <span class="text-danger">{{$errors->first('name')}}</span>
        @endif

        <div class="form-group mb-2">
            <input type="password" name="password" id="" class="form-control" placeholder="Password" required>
            
        </div>
        @if ($errors->has('password'))
        <span class="text-danger">{{$errors->first('password')}}</span>
        @endif
        <button type="submit" class="w-100 btn btn-lg btn-primary">Login</button>
   </form>
@endsection