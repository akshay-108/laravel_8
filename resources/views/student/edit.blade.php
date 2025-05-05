<div class="container">
    @if(session('status'))
        <h6>{{session('status')}}</h6>
    @endif
    <div class="card">
        <div class="card-header">
            <h4>Edit and Update Student
                <a href="{{url('students')}}" class="btn btn-danger float-end">Back</a>
            </h4>
        </div>
        <div class="card-body">
            <form action="{{url('update-student/'.$student->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group mb-3">
                    <label for="student-name">Student Name</label>
                    <input type="text" name="student-name" value="{{$student->name}}" id="student-name">
                </div>
                <div class="form-group mb-3">
                    <label for="student-email">Student Email</label>
                    <input type="text" name="student-email" value="{{$student->email}}" id="student-email">
                </div>
                <div class="form-group mb-3">
                    <label for="student-course">Student Course</label>
                    <input type="text" name="student-course" value="{{$student->course}}" id="student-course">
                </div>
                <div class="form-group mb-3">
                    <label for="student-section">Student Section</label>
                    <input type="text" name="student-section" value="{{$student->section}}" id="student-section">
                </div>
                <div class="form-group mb-3">
                    <button type="submit" class="btn btn-primary">Update Student</button>
                </div>
            </form>
        </div>
    </div>
</div>