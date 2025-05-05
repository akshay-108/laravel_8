<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="ontainer mt-3">
        <div class="row justify-content-center">
            @if(session('status'))
                <h4 class="text-center text-warning">{{session('status')}}</h4>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center text-primary">Edit & Employee
                        <a href="{{url('employees')}}" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="url{{('update-employee/'.$employee->id)}}" method="post">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="emp-name">Employee Name</label>
                            <div class="form-control" type="text" name="emp-name" value="{{$employee->name}}"></div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="emp-dob">Employee DOB</label>
                            <div class="form-control" type="date" name="emp-dob" value="{{$employee->dob}}"></div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="emp-dob">Employee Designation</label>
                            <div class="form-control" type="text" name="emp-designation" value="{{$employee->designation}}"></div>
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Update Employee</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>