@extends('layouts.app')
@section('title', 'Login')
@section('content')
    <!-- @if(!$errors->isEmpty())
    <div class="" role="alert">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>     
        <button type="button" class="" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>                
    @endif -->
    <div class="login">
        <div class="">
            <div class="">
                <div class="card-header">
                    <h5 class="card-title">Login</h5>
                </div>
                <div class="card-body">
                    <form  method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="email"  value="{{old('email')}}">
                            </div>
                            @if ($errors->has('username'))
                                <div class="">
                                    {{$errors->first('username')}}
                                </div>
                            @endif
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                            @if ($errors->has('password'))
                                <div class="">
                                    {{$errors->first('password')}}
                                </div>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                    <div>
                        <button class="nav-button"><a class="nav-link" href="{{ route('user.index') }}">Users</a></button>
                        <button class="nav-button"><a href="{{ route('user.create') }}">New User</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection