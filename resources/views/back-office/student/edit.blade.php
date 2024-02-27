@extends('back-office.home')

@section('content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4 col-lg-8">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Update Student</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-3">
                    <img class="img-profile rounded-circle" src="{{ asset('img/undraw_profile.svg') }}">
                </div>
                <div class="col-lg-9">
                    <form action="{{ route('students.update', $student->id) }}" method="POST">
                        @csrf <!-- Add CSRF token for form submission -->
                        @method('PUT') <!-- Use the PUT method for update -->

                        <div class="form-group">
                            <label>Fullname</label>
                            <input type="text" class="form-control" required name="fullname" placeholder="Fullname..."
                                value="{{ $student->fullname }}">
                        </div>
                        <div class="form-group">
                            <label>Matric Number</label>
                            <input type="text" class="form-control" required name="matric_number"
                                placeholder="Matric Number..." value="{{ $student->matric_number }}">
                        </div>
                        <div class="form-group">
                            <label>Identification Card</label>
                            <input type="text" class="form-control" required name="ic"
                                placeholder="Identification Card..." value="{{ $student->ic }}">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" required name="email" placeholder="Email..."
                                value="{{ $student->email }}">
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" class="form-control" required name="address" placeholder="Address..."
                                value="{{ $student->address }}">
                        </div>
                        <div class="form-group">
                            <label for="semester">Semester</label>
                            <select name="semester" class="form-control" id="semester">
                                <option value="SEM-1">SEM-1</option>
                                <option value="SEM-2">SEM-2</option>
                                <option value="SEM-3">SEM-3</option>
                                <option value="SEM-4">SEM-4</option>
                                <option value="SEM-5">SEM-5</option>
                                <!-- Tambahkan opsi agama lainnya sesuai kebutuhan -->
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Program Of Study</label>
                            <input type="text" class="form-control" required name="program_of_study"
                                placeholder="Program Of Study..." value="{{ $student->program_of_study }}">
                        </div>
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="text" class="form-control" required name="phone_number"
                                placeholder="Phone Number.." value="{{ $student->phone_number }}">
                        </div>
                        <div class="form-group">
                            <label for="religion">Religion</label>
                            <select name="religion" class="form-control" id="religion">
                                <option value="Islam">Islam</option>
                                <option value="Christianity">Christianity</option>
                                <option value="Hinduism">Hinduism</option>
                                <option value="Buddhism">Buddhism</option>
                                <option value="Judaism">Judaism</option>
                                <!-- Tambahkan opsi agama lainnya sesuai kebutuhan -->
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Races</label>
                            <input type="text" class="form-control" required name="races" placeholder="Races.."
                                value="{{ $student->races }}">
                        </div>
                        <div class="form-group">
                            <label>Date Of Birth</label>
                            <input type="text" class="form-control" required name="date_of_birth"
                                placeholder="Date Of Birth.." value="{{ $student->date_of_birth }}">
                        </div>
                        <div class="form-group">
                            <label>Birthplace</label>
                            <input type="text" class="form-control" required name="birthplace" placeholder="Birthplace.."
                                value="{{ $student->birthplace }}">
                        </div>
                        <div class="form-group">
                            <label>Gender</label>
                            <input type="text" class="form-control" required name="gender" placeholder="Gender.."
                                value="{{ $student->gender }}">
                        </div>
                        <div class="form-group">
                            <label>Ages</label>
                            <input type="text" class="form-control" required name="age" placeholder="Age.."
                                value="{{ $student->age }}">
                        </div>
                        <div class="form-group">
                            <label>Father's Name</label>
                            <input name="fathers_name" type="text" class="form-control" placeholder="Fullname..."
                                value="{{ $student->Student_parent->fathers_name }}">
                        </div>
                        <div class="form-group">
                            <label>Mother's Name</label>
                            <input name="mothers_name" type="text" class="form-control"
                                placeholder="Matric Number..." value="{{ $student->Student_parent->mothers_name }}">
                        </div>
                        <div class="form-group">
                            <label>Father's Phone Number</label>
                            <input name="fathers_phone_number" type="text" class="form-control" placeholder="Ic..."
                                value="{{ $student->Student_parent->fathers_phone_number }}">
                        </div>
                        <div class="form-group">
                            <label>Mother's Phone Number</label>
                            <input name="mothers_phone_number" type="text" class="form-control"
                                placeholder="Email..." value="{{ $student->Student_parent->mothers_phone_number }}">
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input name="parent_address" type="text" class="form-control" placeholder="Address..."
                                value="{{ $student->Student_parent->address }}">
                        </div>

                        <input type="submit" class="btn btn-md btn-primary" value="Save & Update">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
