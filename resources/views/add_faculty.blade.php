@include("base.header")
<div class="body-wrapper-inner">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card form-card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="mb-0"><i class="fas fa-chalkboard-teacher me-2"></i>Add New Faculty</h4>
                    <span class="badge bg-light text-success">HR Access</span>
                </div>
                <div class="card-body" style="margin-top: 45px">

                    <!-- Form Start -->
                    <form id="addFacultyForm">

                        <!-- Personal Info Section -->
                        <h6 class="text-muted text-uppercase mb-3 font-weight-bold"
                            style="font-size: 0.75rem; letter-spacing: 1px;">Personal Information</h6>

                        <div class="row g-3 mb-4">
                            <div class="col-md-2">
                                <label for="title" class="form-label">Title</label>
                                <select class="form-select" id="title">
                                    <option value="mr">Mr.</option>
                                    <option value="ms">Ms.</option>
                                    <option value="dr">Dr.</option>
                                    <option value="prof">Prof.</option>
                                </select>
                            </div>
                            <div class="col-md-5">
                                <label for="firstName" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="firstName" placeholder="e.g. Jane" required>
                                <div class="invalid-feedback">Please provide a first name.</div>
                            </div>
                            <div class="col-md-5">
                                <label for="lastName" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="lastName" placeholder="e.g. Smith" required>
                                <div class="invalid-feedback">Please provide a last name.</div>
                            </div>
                        </div>

                        <div class="row g-3 mb-4">
                            <div class="col-md-6">
                                <label for="email" class="form-label">Official Email</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light"><i
                                            class="fas fa-envelope text-muted"></i></span>
                                    <input type="email" class="form-control" id="email"
                                        placeholder="faculty@university.edu" required>
                                </div>
                                <div class="form-text">Faculty portal credentials sent here.</div>
                            </div>
                            <div class="col-md-6">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" id="phone" placeholder="(555) 987-6543">
                            </div>
                        </div>

                        <hr class="my-4">

                        <!-- Professional Info Section -->
                        <h6 class="text-muted text-uppercase mb-3 font-weight-bold"
                            style="font-size: 0.75rem; letter-spacing: 1px;">Employment Details</h6>

                        <div class="row g-3 mb-4">
                            <div class="col-md-6">
                                <label for="employeeId" class="form-label">Employee ID</label>
                                <input type="text" class="form-control" id="employeeId" placeholder="EMP-2024-XXXX"
                                    required>
                            </div>
                            <div class="col-md-6">
                                <label for="joiningDate" class="form-label">Joining Date</label>
                                <input type="date" class="form-control" id="joiningDate" required>
                            </div>
                        </div>

                        <div class="row g-3 mb-4">
                            <div class="col-md-6">
                                <label for="department" class="form-label">Department</label>
                                <select class="form-select" id="department" required>
                                    <option selected disabled value="">Select Department...</option>
                                    <option value="cs">Computer Science</option>
                                    <option value="eng">Engineering</option>
                                    <option value="bus">Business Administration</option>
                                    <option value="sci">Pure Sciences</option>
                                    <option value="med">Medicine</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="designation" class="form-label">Designation / Rank</label>
                                <select class="form-select" id="designation" required>
                                    <option selected disabled value="">Select Rank...</option>
                                    <option value="prof">Professor</option>
                                    <option value="assoc_prof">Associate Professor</option>
                                    <option value="asst_prof">Assistant Professor</option>
                                    <option value="lecturer">Senior Lecturer</option>
                                    <option value="instructor">Instructor</option>
                                    <option value="adjunct">Adjunct Faculty</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="qualification" class="form-label">Highest Qualification</label>
                            <input type="text" class="form-control" id="qualification"
                                placeholder="e.g. PhD in Data Science">
                        </div>

                        <!-- Checkbox Options -->
                        <div class="mb-4 p-3 bg-light rounded">
                            <div class="form-check mb-2">
                                <input type="checkbox" class="form-check-input" id="generatePassword" checked>
                                <label class="form-check-label" for="generatePassword">
                                    Send onboarding email with temporary password
                                </label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="courseAccess">
                                <label class="form-check-label" for="courseAccess">
                                    Grant immediate rights to create new courses
                                </label>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button type="button" class="btn btn-outline-secondary me-md-2">Cancel</button>
                            <button type="submit" class="btn btn-success-custom"><i
                                    class="fas fa-check me-2"></i>Register Faculty</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@include("base.footer")