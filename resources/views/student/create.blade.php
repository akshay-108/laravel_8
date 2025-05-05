
    <div class="container">
        <div class="row jsutify-content-center">
            @if(session('status'))
                <h4 class="alert alert-success">{{session('status')}}</h4>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4>Add Student</h4>
                </div>
                <div class="card-body">
                    <form action="{{url('add-student')}}" method="post">
                    @csrf
                        <div class="form-group mb-3">
                            <label for="student-name">Student Name</label>
                            <input type="text" name="student-name" id="student-name">
                        </div>
                        <div class="form-group mb-3">
                            <label for="student-email">Student Email</label>
                            <input type="text" name="student-email" id="student-email">
                        </div>
                        <div class="form-group mb-3">
                            <label for="student-course">Student Course</label>
                            <input type="text" name="student-course" id="student-course">
                        </div>
                        <div class="form-group mb-3">
                            <label for="student-section">Student Section</label>
                            <input type="text" name="student-section" id="student-section">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Save Student</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
