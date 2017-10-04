
@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="row">

            <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
                <h2 style="margin-bottom: 20px" class="d-none d-sm-block text-center">Manage Courses</h2>

                <hr>

                <div class="form-row">
                    <div class="form-group ml-auto col-md-3">
                        <a href="/dashboard/manage_courses_create" class="btn btn-block btn-primary">Add Course</a>
                    </div>
                </div>

                <div>
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <select class="form-control" id="user_role">
                                    <option>Select University</option>
                                    <option>DU</option>
                                    <option>JU</option>
                                    <option>NSU</option>
                                    <option>PO</option>
                                    <option>DEO</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <select class="form-control" id="user_role">
                                    <option>Select Institute/Department</option>
                                    <option>IIT</option>
                                    <option>ISRT</option>
                                    <option>EEE</option>
                                    <option>ACCE</option>
                                    <option>Microbiology</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <select class="form-control" id="user_role">
                                    <option>Select Semester</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>

                            <div class="form-group col-md-3">
                                <button type="submit" class="btn btn-block btn-success">Search</button>
                            </div>
                        </div>
                    </form>
                    <div>
                        <table class="table table-bordered table-responsive">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>University</th>
                            <th>Inst./Dept.</th>
                            <th>Semester</th>
                            <th>Course Name</th>
                            <th>Course Code</th>
                            <th>Course Credit</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>DU</td>
                            <td>IIT</td>
                            <td>1</td>
                            <td>Software Project Management</td>
                            <td>SE-803</td>
                            <td>3</td>
                            <td>
                                <button class="btn btn-sm btn-primary">Edit</button>
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>DU</td>
                            <td>IIT</td>
                            <td>1</td>
                            <td>Software Project Management</td>
                            <td>SE-803</td>
                            <td>3</td>
                            <td>
                                <button class="btn btn-sm btn-primary">Edit</button>
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>DU</td>
                            <td>IIT</td>
                            <td>1</td>
                            <td>Software Project Management</td>
                            <td>SE-803</td>
                            <td>3</td>
                            <td>
                                <button class="btn btn-sm btn-primary">Edit</button>
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection