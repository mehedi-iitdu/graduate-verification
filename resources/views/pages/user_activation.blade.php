
@extends('layouts.blank')

@section('content')
<div class="container" style="height:1000px">
  <h1 class="text-center" style="margin-bottom: 40px">Activate Your Account</h1>

  <main class="col-md-8" role="main" style="margin: auto">
    <div class="jumbotron">
      <form>
        <div class="form-group">
          <label for="email">Email address</label>
          <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label for="code">Security Code</label>
          <input type="text" class="form-control" id="code" placeholder="Enter Code">
        </div>
        <button type="submit" class="btn btn-primary">Activate</button>
      </form>
    </div>
  </main>
</div>
@endsection