@extends('back-office.home')

@section('content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4 col-lg-6">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add Student Data</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('students.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="fullname">Fullname</label>
                    <input type="text" name="fullname" class="form-control" required id="fullname"
                        placeholder="Fullname...">
                </div>
                <div class="form-group">
                    <label for="matric_number">Matric Number</label>
                    <input type="text" name="matric_number" class="form-control" required id="matric_number"
                        placeholder="Matric Number...">
                </div>
                <div class="form-group">
                    <label for="ic">IC</label>
                    <input type="text" name="ic" class="form-control" required id="ic" placeholder="IC...">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" required id="email"
                        placeholder="Email...">
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" name="address" class="form-control" required id="address"
                        placeholder="Address...">
                </div>
                <div class="form-group">
                    <label for="semester">Semester</label>
                    <select name="semester" class="form-control" required id="semester">
                        <option value="SEM-1">SEM-1</option>
                        <option value="SEM-2">SEM-2</option>
                        <option value="SEM-3">SEM-3</option>
                        <option value="SEM-4">SEM-4</option>
                        <option value="SEM-5">SEM-5</option>
                        <!-- Tambahkan opsi agama lainnya sesuai kebutuhan -->
                    </select>
                </div>
                <div class="form-group">
                    <label for="program_of_study">Program Of Study</label>
                    <input type="text" name="program_of_study" class="form-control" required id="program_of_study"
                        placeholder="Program Of Study...">
                </div>
                <div class="form-group">
                    <label for="phone_number">Phone Number</label>
                    <input type="text" name="phone_number" class="form-control" required id="phone_number"
                        placeholder="Phone Number...">
                </div>
                <div class="form-group">
                    <label for="religion">Religion</label>
                    <select name="religion" class="form-control" required id="religion">
                        <option value="Islam">Islam</option>
                        <option value="Christianity">Christianity</option>
                        <option value="Hinduism">Hinduism</option>
                        <option value="Buddhism">Buddhism</option>
                        <option value="Judaism">Judaism</option>
                        <!-- Tambahkan opsi agama lainnya sesuai kebutuhan -->
                    </select>
                </div>

                <div class="form-group">
                    <label for="races">Races</label>
                    <input type="text" name="races" class="form-control" required id="races"
                        placeholder="Races...">
                </div>
                <div class="form-group">
                    <label for="date_of_birth">Date Of Birth</label>
                    <input type="date" name="date_of_birth" class="form-control" required id="date_of_birth"
                        placeholder="Date Of Birth...">
                </div>
                <div class="form-group">
                    <label for="birthplace">Birthplace</label>
                    <input type="text" name="birthplace" class="form-control" required id="birthplace"
                        placeholder="Birthplace...">
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select name="gender" class="form-control" required id="gender">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="ages">Ages</label>
                    <input type="number" name="age" class="form-control" required id="age"
                        placeholder="Ages...">
                </div>
                {{-- INPUT DATA PARENTS --}}
                <div class="form-group">
                    <label for="fathers_name">Father's Name</label>
                    <input type="text" name="fathers_name" class="form-control" required id="fathers_name"
                        placeholder="Father's Name...">
                </div>
                <div class="form-group">
                    <label for="mothers_name">Mother's Name</label>
                    <input type="text" name="mothers_name" class="form-control" required id="mothers_name"
                        placeholder="Mother's Name...">
                </div>
                <div class="form-group">
                    <label for="fathers_phone_number">Father's Phone Number</label>
                    <input type="text" name="fathers_phone_number" class="form-control" required
                        id="fathers_phone_number" placeholder="Father's Phone Number...">
                </div>
                <div class="form-group">
                    <label for="mothers_phone_number">Mother's Phone Number</label>
                    <input type="text" name="mothers_phone_number" class="form-control" required
                        id="mothers_phone_number" placeholder="Mother's Phone Number...">
                </div>
                <div class="form-group">
                    <label for="parent_address">Parent's Address</label>
                    <input type="text" name="parent_address" class="form-control" required id="parent_address"
                        placeholder="Parent's Address">
                </div>
                <input type="submit" class="btn btn-md btn-primary" value="Save">
            </form>


        </div>
    </div>
@endsection
