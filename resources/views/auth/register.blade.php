@extends('layout.auth-master')
@section('content')
   <h1>Register</h1>
   <form action="{{route('register.registration')}}" method="post">
        @csrf
        <div class="form-group mb-2">
            <input type="email" name="email" id="" class="form-control" placeholder="example.com" required>
        </div>
        @if ($errors->has('email'))
            <span class="text-danger">{{$errors->first('email')}}</span>
        @endif

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
        <div class="form-group mb-2">
            <input type="password" name="confirm_password" id="" class="form-control" placeholder="Confirm-Password" required>
            
        </div>
        @if ($errors->has('confirm_password'))
        <span class="text-danger">{{$errors->first('confirm_password')}}</span>
    @endif
        <button type="submit" class="w-100 btn btn-lg btn-primary">Register</button>
   </form>
@endsection