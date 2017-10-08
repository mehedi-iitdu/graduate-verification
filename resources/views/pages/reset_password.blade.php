
@extends('layouts.blank')

@section('content')
<div class="container" style="height:1000px">
  <h1 class="text-center" style="margin-bottom: 40px">Reset Password</h1>

  <main class="col-md-8" role="main" style="margin: auto">
    <div class="jumbotron">
      <form>
        <div class="form-group">
          <label for="new_password">New Password</label>
          <input type="password" class="form-control" id="new_password" aria-describedby="emailHelp" placeholder="Enter new password">
        </div>

        <div class="form-group">
          <label for="new_password">Confirm Password</label>
          <input type="password" class="form-control" id="new_password" aria-describedby="emailHelp" placeholder="Enter password again">
        </div>
        <button type="submit" class="btn btn-primary">Reset</button>
      </form>
    </div>
  </main>
</div>
@endsection