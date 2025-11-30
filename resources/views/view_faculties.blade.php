@include("base.header")
<div class="body-wrapper-inner">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card form-card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="mb-0"><i class="fas fa-chalkboard-teacher me-2"></i>View All Faculties</h4>
                    <span class="badge bg-light text-success">HR Access</span>
                </div>
                <div class="card-body" style="margin-top: 45px">
                    <table class="table">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Employee ID</th>
                            <th>Department</th>
                            <th>Rank</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($data as $value)
                            <tr>
                            <td>{{ $value['first_name'] }} {{ $value['last_name'] }}</td>
                            <td>{{ $value['email'] }}</td>
                            <td>{{ $value['emp_id'] }}</td>
                            <td>{{ $value['department'] }}</td>
                            <td>{{ $value['designation'] }}</td>
                            <td>
                                <a href="" class="bg-blue-600 px-10 py-2 text-white">Edit</a>
                                <a href="" class="bg-red-600 px-10 py-2 text-white">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@include("base.footer")