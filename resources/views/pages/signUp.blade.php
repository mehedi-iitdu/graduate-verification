@extends('layouts.app')

@section('content')
    <div class="jumbotron">
        <div class="sign-up">
            <h1>Sign Up</h1>
            <form class="sign-up-form">
                <div class="form-group">
                    <label class="form-control-label" for="name">Full Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter Full Name">
                </div>
                <div class="form-group">
                    <label class="form-control-label" for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter Email">
                </div>
                <div class="form-group">
                    <label class="form-control-label" for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter Password">
                </div>
                <div class="form-group">
                    <label class="form-control-label" for="confirm-password">Confirm Password</label>
                    <input type="password" class="form-control" id="confirm-password" placeholder="Enter Password Again">
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
                <button type="submit" class="btn btn-primary">Sign Up</button>
            </form>
        </div>
    </div>
@endsection