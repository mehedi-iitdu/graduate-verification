@extends('layouts.app')

@section('content')

    <div class="container-fluid">
      <div class="row">
        <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
          <h2 style="margin-bottom: 40px" class="d-none d-sm-block">Request to verify</h2>

          <div class="jumbotron">
            <h3 for="Student" class="col-sm-6"><h3>Student Information</h3></label>

            <div class="row">
              <div for="name" class="col-sm-6">Name</div>
              <div class="col-sm-6">Student's Name</div>
            </div>

            <div class="row">
              <div for="name" class="col-sm-6">Date of Birth</div>
              <div class="col-sm-6">Student Date of Birth</div>
            </div>

            <div class="row">
              <div for="name" class="col-sm-6">University</div>
              <div class="col-sm-6">Student's University</div>
            </div>

            <div class="row">
              <div for="name" class="col-sm-6">Registartion Number</div>
              <div class="col-sm-6">Student's Registration Number</div>
            </div>

            <div class="row">
              <div for="name" class="col-sm-6">Email</div>
              <div class="col-sm-6">Student's Email</div>
            </div>
                

          </div>

          <div class="jumbotron">
            <form>
              <div class="form-group row">
                <label for="stakeholder" class="col-sm-6 col-form-label"><h3>Stackholder Information</h3></label>
              </div>

              <div class="form-group row">
                <label for="name" class="col-sm-6 col-form-label">Name</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="name" placeholder="Name">
                </div>
              </div>

              <div class="form-group row">
                <label for="organization" class="col-sm-6 col-form-label">University/Employer</label>
                <div class="col-sm-6">
                  <select class="form-control" id="university_name">
                    <option selected="true" disabled="disabled">Select Stakeholder Type</option>
                    <option>University Authority</option>
                    <option>Organization Authority</option>
                  </select>
                </div>
              </div>

              <div class="form-group row">
                <label for="designation" class="col-sm-6 col-form-label">Designation</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="designation" placeholder="Program Officer">
                </div>
              </div>

              <div class="form-group row">
                <label for="email" class="col-sm-6 col-form-label">Email</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="email" placeholder="example@gmail.com">
                </div>
              </div>

              <div class="form-group row">
                <label for="country" class="col-sm-6 col-form-label">Country</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="country" placeholder="Bangladesh">
                </div>
              </div>

              <div class="form-group">
                <div align="right">
                  <button type="submit" class="btn btn-success">Request</button>
                </div>
              </div>
            </form>
          </div>
        </main>
      </div>   
    </div>
@endsection