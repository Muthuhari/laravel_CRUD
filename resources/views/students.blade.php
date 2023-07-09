<form action="/saveData" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Student Name</label>
                            <input type="text" name="stu_name" class="form-control"  placeholder="Student Name">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Student DOB</label>
                            <input type="date" name="stu_dob" class="form-control"  placeholder="Student Name">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Address</label>
                            <input type="text" name="stu_address" class="form-control"  placeholder="Student Name">
                        </div>

                        <input type="submit" value="Register Now" class="btn btn-primary">

                    </form>