@extends('layouts.app')

@section('content')
    <div class="jumbotron">
        <div class="sign-up">
            <h1>Login</h1>
            <form class="sign-up-form">
                <div class="form-group">
                    <label class="form-control-label" for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter Email">
                </div>
                <div class="form-group">
                    <label class="form-control-label" for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter Password">
                </div>
                <div class="form-group">
                    <label for="user-role">Select Your Role</label>
                    <select class="form-control" id="user-role">
                        <option>Admin</option>
                        <option>Register</option>
                        <option>Foreign University</option>
                        <option>Employer</option>
                        <option>Graduate Student</option>
                    </select>
                </div>
                 <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
@endsection