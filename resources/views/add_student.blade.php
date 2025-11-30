@include("base.header")

@if(session("success"))
    <script>
        Swal.fire({
            title: "Student Added",
            text: "{{ session('success') }}",
            icon: "success"
        });
    </script>
@endif

<div class="body-wrapper-inner">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card form-card">
                
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="mb-0"><i class="fas fa-user-graduate me-2"></i>Add New Student</h4>
                    <span class="badge bg-light text-primary">Academics</span>
                </div>

                <div class="card-body" style="margin-top: 45px">

                    <form id="addStudentForm" method="POST" action="/add_student">
                        @csrf

                        <!-- Personal Info -->
                        <h6 class="text-muted text-uppercase mb-3 font-weight-bold" style="font-size: 0.75rem; letter-spacing: 1px;">
                            Personal Information
                        </h6>

                        <div class="row g-3 mb-4">
                            <div class="col-md-2">
                                <label class="form-label">Title</label>
                                <select class="form-select" name="student_gender">
                                    <option value="mr">Mr.</option>
                                    <option value="ms">Ms.</option>
                                </select>
                            </div>

                            <div class="col-md-5">
                                <label class="form-label">First Name</label>
                                <input type="text" class="form-control" placeholder="e.g. Ali" required name="student_fname">
                            </div>

                            <div class="col-md-5">
                                <label class="form-label">Last Name</label>
                                <input type="text" class="form-control" placeholder="e.g. Ahmed" required name="student_lname">
                            </div>
                        </div>

                        <div class="row g-3 mb-4">
                            <div class="col-md-6">
                                <label class="form-label">Email</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light"><i class="fas fa-envelope text-muted"></i></span>
                                    <input type="email" class="form-control" placeholder="student@example.com" required name="student_email">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" placeholder="03123456789" name="student_number">
                            </div>
                        </div>

                        <hr class="my-4">

                        <!-- Academic Info -->
                        <h6 class="text-muted text-uppercase mb-3 font-weight-bold" style="font-size: 0.75rem; letter-spacing: 1px;">
                            Academic Details
                        </h6>

                        <div class="row g-3 mb-4">

                            <div class="col-md-6">
                                <label class="form-label">Std ID</label>
                                <input type="text" class="form-control" placeholder="REG-2025-XXX" required name="student_regno">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Program</label>
                                <select class="form-select" required name="student_program">
                                    <option disabled selected value="">Select Program...</option>
                                    <option value="bscs">BS Computer Science</option>
                                    <option value="bsee">BS Electrical Engineering</option>
                                    <option value="bba">BBA</option>
                                    <option value="bsphy">BS Physics</option>
                                    <option value="bsbio">BS Biology</option>
                                </select>
                            </div>

                        </div>

                        <!-- Actions -->
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button type="button" class="btn btn-outline-secondary me-md-2">Cancel</button>
                            <button type="submit" class="btn btn-success-custom">
                                <i class="fas fa-check me-2"></i>Register Student
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@include("base.footer")
