@extends('back-office.home')

@section('content')
    <!-- DataTales Example -->
    <div class="col-lg-6">
        <div class="card shadow mb-4">
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Profile Student</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-3">
                        <img class="img-profile rounded-circle" src="{{ asset('img/undraw_profile.svg') }}">

                    </div>
                    <div class="col-lg-9">
                        <form class="user">
                            <div class="form-group">
                                <label>Fullname</label>
                                <input type="text" class="form-control" readonly id="exampleInputEmail"
                                    placeholder="Fullname..." value="{{ $student->fullname }}">
                            </div>
                            <div class="form-group">
                                <label>Matric Number</label>
                                <input type="text" class="form-control" readonly id="exampleInputEmail"
                                    placeholder="Matric Number..." value="{{ $student->matric_number }}">
                            </div>
                            <div class="form-group">
                                <label>Ic</label>
                                <input type="text" class="form-control" readonly id="exampleInputEmail"
                                    placeholder="Ic..." value="{{ $student->ic }}">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" readonly id="exampleInputEmail"
                                    placeholder="Email..." value="{{ $student->email }}">
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" class="form-control" readonly id="exampleInputEmail"
                                    placeholder="Address..." value="{{ $student->address }}">
                            </div>
                            <div class="form-group">
                                <label>Semester</label>
                                <input type="text" class="form-control" readonly id="exampleInputEmail"
                                    placeholder="Address..." value="{{ $student->semester }}">
                            </div>
                            <div class="form-group">
                                <label>Program Of Study</label>
                                <input type="text" class="form-control" readonly id="exampleInputEmail"
                                    placeholder="Program Of Study..." value="{{ $student->program_of_study }}">
                            </div>
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="text" class="form-control" readonly id="exampleInputEmail"
                                    placeholder="Phone Number.." value="{{ $student->phone_number }}">
                            </div>
                            <div class="form-group">
                                <label>Religion</label>
                                <input type="text" class="form-control" readonly id="exampleInputEmail"
                                    placeholder="Religion.." value="{{ $student->religion }}">
                            </div>
                            <div class="form-group">
                                <label>Races</label>
                                <input type="text" class="form-control" readonly id="exampleInputEmail"
                                    placeholder="Races.." value="{{ $student->races }}">
                            </div>
                            <div class="form-group">
                                <label>Date Of Birth</label>
                                <input type="text" class="form-control" readonly id="exampleInputEmail"
                                    placeholder="Date Of Birth.." value="{{ $student->date_of_birth }}">
                            </div>
                            <div class="form-group">
                                <label>Birthplace</label>
                                <input type="text" class="form-control" readonly id="exampleInputEmail"
                                    placeholder="Birthplace.." value="{{ $student->birthplace }}">
                            </div>
                            <div class="form-group">
                                <label>Gender</label>
                                <input type="text" class="form-control" readonly id="exampleInputEmail"
                                    placeholder="Gender.." value="{{ $student->gender }}">
                            </div>
                            <div class="form-group">
                                <label>Ages</label>
                                <input type="text" class="form-control" readonly id="exampleInputEmail"
                                    placeholder="Ages.." value="{{ $student->age }}">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="col-lg-6">
        <div class="card shadow mb-4">
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Student Parents</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form class="user">
                            <div class="form-group">
                                <label>Father's Name</label>
                                <input type="text" class="form-control" readonly id="exampleInputEmail"
                                    placeholder="Fullname..." value="{{ $student->Student_parent->fathers_name }}">
                            </div>
                            <div class="form-group">
                                <label>Mother's Name</label>
                                <input type="text" class="form-control" readonly id="exampleInputEmail"
                                    placeholder="Matric Number..." value="{{ $student->Student_parent->mothers_name }}">
                            </div>
                            <div class="form-group">
                                <label>Father's Phone Number</label>
                                <input type="text" class="form-control" readonly id="exampleInputEmail"
                                    placeholder="Ic..." value="{{ $student->Student_parent->fathers_phone_number }}">
                            </div>
                            <div class="form-group">
                                <label>Mother's Phone Number</label>
                                <input type="email" class="form-control" readonly id="exampleInputEmail"
                                    placeholder="Email..." value="{{ $student->Student_parent->mothers_phone_number }}">
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" class="form-control" readonly id="exampleInputEmail"
                                    placeholder="Address..." value="{{ $student->Student_parent->address }}">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
