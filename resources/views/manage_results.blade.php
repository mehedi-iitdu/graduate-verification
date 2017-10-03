@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Manage Users</a>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown show">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Manage Universities
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">University</a>
                                <a class="dropdown-item" href="#">Department/Institute</a>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item">
                        <div class="dropdown show">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Manage Department/Institute
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">Semester</a>
                                <a class="dropdown-item" href="#">Course</a>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="#">Manage Results</a>
                    </li>

                    <li class="nav-item">
                        <div class="dropdown show">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Manage Verification
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">Request</a>
                                <a class="dropdown-item" href="#">Verify</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>

            <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
                <h2 style="margin-bottom: 40px" class="d-none d-sm-block">Manage Results</h2>

                <div class="jumbotron">
                    <form>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label" for="user_role">University Name</label>
                            <div class="col-sm-8">
                                <select class="form-control" id="univ_name">
                                    <option>University of Dhaka</option>
                                    <option>University of Khulna</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label">Department/Institute</label>
                            <div class="col-sm-8">
                                <select class="form-control" id="dept_name">
                                    <option>Institute of Information Technology</option>
                                    <option>Applied Physics</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label" for="user_role">Semester</label>
                            <div class="col-sm-8">
                                <select class="form-control" id="user_role">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-sm-4 col-form-label">Registration No.</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="email" placeholder="Student Registration No.">
                            </div>
                        </div>

                        <div class="form-group">
                            <div align="right">
                                <button type="submit" class="btn btn-success">Search</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div>
                    <table class="table table-bordered table-responsive">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Course Name</th>
                            <th>Course Code</th>
                            <th>Credit</th>
                            <th>GPA</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Course 1</td>
                            <td>801</td>
                            <td>3</td>
                            <td>
                                <input type="text" class="form-control" placeholder="GPA">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Course 2</td>
                            <td>802</td>
                            <td>3</td>
                            <td>
                                <input type="text" class="form-control" placeholder="GPA">
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>
@endsection