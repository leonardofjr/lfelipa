@extends('layouts.master')
@section('content')
    <h2>Login:</h2>
    <section class="container"> 
           <form id="login-form"method="POST" action="/auth/login">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}" >
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="form-group">
                <label for="password">Remember Me:</label>
               <input type="checkbox" name="remember"> 
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </section>
@endsection