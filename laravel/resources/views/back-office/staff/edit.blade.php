@extends('back-office.home')

@section('content')
<!-- DataTales Example -->
<div class="card shadow mb-4 col-lg-8">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Form Update Staff</h6>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-3">
                <img class="img-profile rounded-circle" src="{{ asset('img/undraw_profile.svg') }}">
            </div>
            <div class="col-lg-9">
                <form action="{{ route('staff.update', $staff->id) }}" method="POST">
                    @csrf <!-- Add CSRF token for form submission -->
                    @method('PUT') <!-- Use the PUT method for update -->

                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" required name="name" id="exampleInputEmail" placeholder="Name..." value="{{ $staff->name }}">
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" required name="address" id="exampleInputEmail" placeholder="Address..." value="{{ $staff->address }}">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" required name="email" id="exampleInputEmail" placeholder="Email..." value="{{ $staff->email }}">
                    </div>
                    <div class="form-group">
                        <label>Phone Number</label>
                        <input type="phone_number" class="form-control" required name="phone_number" id="exampleInputEmail" placeholder="Phone_Number..." value="{{ $staff->phone_number }}">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" class="form-control" required name="password" id="exampleInputEmail" placeholder="Password..." value="{{ $staff->password }}">
                    </div>

                    <input type="submit" class="btn btn-md btn-primary" value="Save & Update">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection