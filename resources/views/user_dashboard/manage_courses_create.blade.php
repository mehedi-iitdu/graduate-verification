@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row">

        <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
            <h2 style="margin-bottom: 40px" class="d-none d-sm-block">Manage Courses</h2>

            <div class="jumbotron">
                <form>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label" for="university_name">Select University Name</label>
                        <div class="col-sm-8">
                            <select class="form-control" id="university_name">
                                <option selected="true" disabled="disabled">Select University</option>
                                <option>DU</option>
                                <option>JU</option>
                                <option>NSU</option>
                                <option>PO</option>
                                <option>DEO</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label" for="department_name">Select Institute/Department Name</label>
                        <div class="col-sm-8">
                            <select class="form-control" id="department_name">
                                <option selected="true" disabled="disabled">Select Institute/Department</option>
                                <option>IIT</option>
                                <option>ISRT</option>
                                <option>EEE</option>
                                <option>ACCE</option>
                                <option>Microbiology</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label" for="semester_num">Select Semester Number</label>
                        <div class="col-sm-8">
                            <select class="form-control" id="semester_num">
                                <option selected="true" disabled="disabled">Select Semester</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label" for="course_name">Enter Course Name</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="course_name" placeholder="Enter Course Name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label" for="course_code">Enter Course Code</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="course_code" placeholder="Enter Course Code">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label" for="course_credit">Enter Course Credit</label>
                        <div class="col-sm-8">
                            <input type="number" min="1" max="12" class="form-control" id="course_credit" placeholder="Enter Course Credit">
                        </div>
                    </div>
                    <div class="form-group">
                        <div align="right">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </main>
    </div>
</div>
@endsection