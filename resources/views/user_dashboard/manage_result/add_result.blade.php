@extends('layouts.app')

@section('content')
    <h1>Add Result</h1>
         <form class="sign-up-form">
                <div class="form-group">
                    <label class="form-control-label" for="university_Name">University</label>
                    <select name="universities">
                        <option value="universities">universities</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-control-label" for="dept_Name">Department/Institute</label>
                    <select name="departments">
                        <option value="volvo">Volvo</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-control-label" for="session">Session(Running)</label>
                    <select name="session">
                        <option value="volvo">Volvo</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-control-label" for="year">Year</label>
                    <select name="year">
                        <option value="volvo">Volvo</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-control-label" for="semester">Semester</label>
                    <select name="semester">
                        <option value="volvo">Volvo</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-control-label" for="student_reg_number">Student's Registration Number</label>
                    <input type="text" class="form-control" id="student_reg_number">
                </div>                
                 <button type="submit" class="btn btn-primary">Submit</button>
            </form>
@endsection