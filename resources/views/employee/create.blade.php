<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mt-3">
        <div class="row justify-content-center">
            @if(session('status'))
                <h4 class="alert alert-success">{{session('status')}}</h4>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center text-primary">Add Employee</h4>
                </div>
                <div class="card-body">
                    <form action="{{url('add-employee')}}" method="post">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="emp-name">Employee Name</label>
                            <input type="text" class="form-control" name="emp-name" id="emp-name">
                        </div>
                        <div class="form-group mb-3">
                            <label for="emp-dob">Employee DOB</label>
                            <input type="date" class="form-control" name="emp-dob" id="emp-dob">
                        </div>
                        <div class="form-group mb-3">
                            <label for="emp-designation">Employee Designation</label>
                            <input type="text" class="form-control" name="emp-designation" id="emp-designation">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Save Employee</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>