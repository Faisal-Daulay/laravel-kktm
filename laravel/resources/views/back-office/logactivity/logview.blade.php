@extends('back-office.home')

@section('content')
    <!-- DataTales Example -->
    {{-- @dd($logs->event); --}}
    @if ($logs->event === 'created')
        <div class="col-lg-6">

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">New Student</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form class="user">
                                <div class="form-group">
                                    <label>Fullname</label>
                                    <input type="text" class="form-control" readonly id="exampleInputEmail"
                                        placeholder="Fullname..."
                                        value="{{ $logs['properties']['attributes']['fullname'] }}">
                                </div>
                                <div class="form-group">
                                    <label>Matric Number</label>
                                    <input type="text" class="form-control" readonly id="exampleInputEmail"
                                        placeholder="Matric Number..."
                                        value="{{ $logs['properties']['attributes']['matric_number'] }}">
                                </div>
                                <div class="form-group">
                                    <label>Ic</label>
                                    <input type="text" class="form-control" readonly id="exampleInputEmail"
                                        placeholder="Ic..." value="{{ $logs['properties']['attributes']['ic'] }}">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" readonly id="exampleInputEmail"
                                        placeholder="Email..." value="{{ $logs['properties']['attributes']['email'] }}">
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" class="form-control" readonly id="exampleInputEmail"
                                        placeholder="Address..." value="{{ $logs['properties']['attributes']['address'] }}">
                                </div>
                                <div class="form-group">
                                    <label>Program Of Study</label>
                                    <input type="text" class="form-control" readonly id="exampleInputEmail"
                                        placeholder="Program Of Study..."
                                        value="{{ $logs['properties']['attributes']['program_of_study'] }}">
                                </div>
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input type="text" class="form-control" readonly id="exampleInputEmail"
                                        placeholder="Phone Number.."
                                        value="{{ $logs['properties']['attributes']['phone_number'] }}">
                                </div>
                                <div class="form-group">
                                    <label>Religion</label>
                                    <input type="text" class="form-control" readonly id="exampleInputEmail"
                                        placeholder="Religion.."
                                        value="{{ $logs['properties']['attributes']['religion'] }}">
                                </div>
                                <div class="form-group">
                                    <label>Races</label>
                                    <input type="text" class="form-control" readonly id="exampleInputEmail"
                                        placeholder="Races.." value="{{ $logs['properties']['attributes']['races'] }}">
                                </div>
                                <div class="form-group">
                                    <label>Date Of Birth</label>
                                    <input type="text" class="form-control" readonly id="exampleInputEmail"
                                        placeholder="Date Of Birth.."
                                        value="{{ $logs['properties']['attributes']['date_of_birth'] }}">
                                </div>
                                <div class="form-group">
                                    <label>Birthplace</label>
                                    <input type="text" class="form-control" readonly id="exampleInputEmail"
                                        placeholder="Birthplace.."
                                        value="{{ $logs['properties']['attributes']['birthplace'] }}">
                                </div>
                                <div class="form-group">
                                    <label>Gender</label>
                                    <input type="text" class="form-control" readonly id="exampleInputEmail"
                                        placeholder="Gender.." value="{{ $logs['properties']['attributes']['gender'] }}">
                                </div>
                                <div class="form-group">
                                    <label>Ages</label>
                                    <input type="text" class="form-control" readonly id="exampleInputEmail"
                                        placeholder="Ages.." value="{{ $logs['properties']['attributes']['age'] }}">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @elseif ($logs->event === 'updated')
        <div class="col-lg-6">

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Before</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form class="user">
                                <div class="form-group">
                                    <label>Fullname</label>
                                    <input type="text" class="form-control" readonly id="exampleInputEmail"
                                        placeholder="Fullname..." value="{{ $logs['properties']['old']['fullname'] }}">
                                </div>
                                <div class="form-group">
                                    <label>Matric Number</label>
                                    <input type="text" class="form-control" readonly id="exampleInputEmail"
                                        placeholder="Matric Number..."
                                        value="{{ $logs['properties']['old']['matric_number'] }}">
                                </div>
                                <div class="form-group">
                                    <label>Ic</label>
                                    <input type="text" class="form-control" readonly id="exampleInputEmail"
                                        placeholder="Ic..." value="{{ $logs['properties']['old']['ic'] }}">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" readonly id="exampleInputEmail"
                                        placeholder="Email..." value="{{ $logs['properties']['old']['email'] }}">
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" class="form-control" readonly id="exampleInputEmail"
                                        placeholder="Address..." value="{{ $logs['properties']['old']['address'] }}">
                                </div>
                                <div class="form-group">
                                    <label>Program Of Study</label>
                                    <input type="text" class="form-control" readonly id="exampleInputEmail"
                                        placeholder="Program Of Study..."
                                        value="{{ $logs['properties']['old']['program_of_study'] }}">
                                </div>
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input type="text" class="form-control" readonly id="exampleInputEmail"
                                        placeholder="Phone Number.."
                                        value="{{ $logs['properties']['old']['phone_number'] }}">
                                </div>
                                <div class="form-group">
                                    <label>Religion</label>
                                    <input type="text" class="form-control" readonly id="exampleInputEmail"
                                        placeholder="Religion.." value="{{ $logs['properties']['old']['religion'] }}">
                                </div>
                                <div class="form-group">
                                    <label>Races</label>
                                    <input type="text" class="form-control" readonly id="exampleInputEmail"
                                        placeholder="Races.." value="{{ $logs['properties']['old']['races'] }}">
                                </div>
                                <div class="form-group">
                                    <label>Date Of Birth</label>
                                    <input type="text" class="form-control" readonly id="exampleInputEmail"
                                        placeholder="Date Of Birth.."
                                        value="{{ $logs['properties']['old']['date_of_birth'] }}">
                                </div>
                                <div class="form-group">
                                    <label>Birthplace</label>
                                    <input type="text" class="form-control" readonly id="exampleInputEmail"
                                        placeholder="Birthplace.."
                                        value="{{ $logs['properties']['old']['birthplace'] }}">
                                </div>
                                <div class="form-group">
                                    <label>Gender</label>
                                    <input type="text" class="form-control" readonly id="exampleInputEmail"
                                        placeholder="Gender.." value="{{ $logs['properties']['old']['gender'] }}">
                                </div>
                                <div class="form-group">
                                    <label>Ages</label>
                                    <input type="text" class="form-control" readonly id="exampleInputEmail"
                                        placeholder="Ages.." value="{{ $logs['properties']['old']['age'] }}">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">After</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form class="user">
                                <div class="form-group">
                                    <label>Fullname</label>
                                    <input type="text" class="form-control" readonly id="exampleInputEmail"
                                        placeholder="Fullname..."
                                        value="{{ $logs['properties']['attributes']['fullname'] }}">
                                </div>
                                <div class="form-group">
                                    <label>Matric Number</label>
                                    <input type="text" class="form-control" readonly id="exampleInputEmail"
                                        placeholder="Matric Number..."
                                        value="{{ $logs['properties']['attributes']['matric_number'] }}">
                                </div>
                                <div class="form-group">
                                    <label>Ic</label>
                                    <input type="text" class="form-control" readonly id="exampleInputEmail"
                                        placeholder="Ic..." value="{{ $logs['properties']['attributes']['ic'] }}">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" readonly id="exampleInputEmail"
                                        placeholder="Email..." value="{{ $logs['properties']['attributes']['email'] }}">
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" class="form-control" readonly id="exampleInputEmail"
                                        placeholder="Address..."
                                        value="{{ $logs['properties']['attributes']['address'] }}">
                                </div>
                                <div class="form-group">
                                    <label>Program Of Study</label>
                                    <input type="text" class="form-control" readonly id="exampleInputEmail"
                                        placeholder="Program Of Study..."
                                        value="{{ $logs['properties']['attributes']['program_of_study'] }}">
                                </div>
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input type="text" class="form-control" readonly id="exampleInputEmail"
                                        placeholder="Phone Number.."
                                        value="{{ $logs['properties']['attributes']['phone_number'] }}">
                                </div>
                                <div class="form-group">
                                    <label>Religion</label>
                                    <input type="text" class="form-control" readonly id="exampleInputEmail"
                                        placeholder="Religion.."
                                        value="{{ $logs['properties']['attributes']['religion'] }}">
                                </div>
                                <div class="form-group">
                                    <label>Races</label>
                                    <input type="text" class="form-control" readonly id="exampleInputEmail"
                                        placeholder="Races.." value="{{ $logs['properties']['attributes']['races'] }}">
                                </div>
                                <div class="form-group">
                                    <label>Date Of Birth</label>
                                    <input type="text" class="form-control" readonly id="exampleInputEmail"
                                        placeholder="Date Of Birth.."
                                        value="{{ $logs['properties']['attributes']['date_of_birth'] }}">
                                </div>
                                <div class="form-group">
                                    <label>Birthplace</label>
                                    <input type="text" class="form-control" readonly id="exampleInputEmail"
                                        placeholder="Birthplace.."
                                        value="{{ $logs['properties']['attributes']['birthplace'] }}">
                                </div>
                                <div class="form-group">
                                    <label>Gender</label>
                                    <input type="text" class="form-control" readonly id="exampleInputEmail"
                                        placeholder="Gender.." value="{{ $logs['properties']['attributes']['gender'] }}">
                                </div>
                                <div class="form-group">
                                    <label>Ages</label>
                                    <input type="text" class="form-control" readonly id="exampleInputEmail"
                                        placeholder="Ages.." value="{{ $logs['properties']['attributes']['age'] }}">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="col-lg-6">

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Delete Student</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form class="user">
                                <div class="form-group">
                                    <label>Fullname</label>
                                    <input type="text" class="form-control" readonly id="exampleInputEmail"
                                        placeholder="Fullname..." value="{{ $logs['properties']['old']['fullname'] }}">
                                </div>
                                <div class="form-group">
                                    <label>Matric Number</label>
                                    <input type="text" class="form-control" readonly id="exampleInputEmail"
                                        placeholder="Matric Number..."
                                        value="{{ $logs['properties']['old']['matric_number'] }}">
                                </div>
                                <div class="form-group">
                                    <label>Ic</label>
                                    <input type="text" class="form-control" readonly id="exampleInputEmail"
                                        placeholder="Ic..." value="{{ $logs['properties']['old']['ic'] }}">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" readonly id="exampleInputEmail"
                                        placeholder="Email..." value="{{ $logs['properties']['old']['email'] }}">
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" class="form-control" readonly id="exampleInputEmail"
                                        placeholder="Address..." value="{{ $logs['properties']['old']['address'] }}">
                                </div>
                                <div class="form-group">
                                    <label>Program Of Study</label>
                                    <input type="text" class="form-control" readonly id="exampleInputEmail"
                                        placeholder="Program Of Study..."
                                        value="{{ $logs['properties']['old']['program_of_study'] }}">
                                </div>
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input type="text" class="form-control" readonly id="exampleInputEmail"
                                        placeholder="Phone Number.."
                                        value="{{ $logs['properties']['old']['phone_number'] }}">
                                </div>
                                <div class="form-group">
                                    <label>Religion</label>
                                    <input type="text" class="form-control" readonly id="exampleInputEmail"
                                        placeholder="Religion.." value="{{ $logs['properties']['old']['religion'] }}">
                                </div>
                                <div class="form-group">
                                    <label>Races</label>
                                    <input type="text" class="form-control" readonly id="exampleInputEmail"
                                        placeholder="Races.." value="{{ $logs['properties']['old']['races'] }}">
                                </div>
                                <div class="form-group">
                                    <label>Date Of Birth</label>
                                    <input type="text" class="form-control" readonly id="exampleInputEmail"
                                        placeholder="Date Of Birth.."
                                        value="{{ $logs['properties']['old']['date_of_birth'] }}">
                                </div>
                                <div class="form-group">
                                    <label>Birthplace</label>
                                    <input type="text" class="form-control" readonly id="exampleInputEmail"
                                        placeholder="Birthplace.."
                                        value="{{ $logs['properties']['old']['birthplace'] }}">
                                </div>
                                <div class="form-group">
                                    <label>Gender</label>
                                    <input type="text" class="form-control" readonly id="exampleInputEmail"
                                        placeholder="Gender.." value="{{ $logs['properties']['old']['gender'] }}">
                                </div>
                                <div class="form-group">
                                    <label>Ages</label>
                                    <input type="text" class="form-control" readonly id="exampleInputEmail"
                                        placeholder="Ages.." value="{{ $logs['properties']['old']['age'] }}">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
