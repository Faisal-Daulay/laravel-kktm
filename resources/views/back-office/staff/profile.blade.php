@extends('back-office.home')

@section('content')
<!-- DataTales Example -->
<div class="card shadow mb-4 col-lg-8">
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Profile Staff</h6>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-3">
                <img class="img-profile rounded-circle" src="{{ asset('img/undraw_profile.svg') }}">

            </div>
            <div class="col-lg-9">
                <!-- <div class="dropdown">
                    <button class="mb-4 btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Export
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">PDF</a></li>
                        <li><a class="dropdown-item" href="#">Excel</a></li>
                    </ul>
                </div> -->
                <form class="user">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" readonly id="exampleInputEmail" placeholder="Name..." value="{{ $staff->name }}">
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" readonly id="exampleInputEmail" placeholder="Address..." value="{{ $staff->address }}">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" readonly id="exampleInputEmail" placeholder="Email..." value="{{ $staff->email }}">
                    </div>
                    <div class="form-group">
                        <label>Phone_Number</label>
                        <input type="phone_number" class="form-control" readonly id="exampleInputEmail" placeholder="Phone_Number..." value="{{ $staff->phone_number }}">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection