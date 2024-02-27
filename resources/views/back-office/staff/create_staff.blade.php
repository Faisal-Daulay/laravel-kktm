@extends('back-office.home')

@section('content')
<!-- DataTales Example -->
<div class="card shadow mb-4 col-lg-6">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Add Staff Data</h6>
    </div>
    <div class="card-body">


        <form action="{{ route('staff.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" required name="name" class="form-control" id="name" placeholder="name...">
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" required name="address" class="form-control" id="address" placeholder="address...">
            </div>
            <div class="form-group">
                <label for="ic">Email</label>
                <input type="email" required name="email" class="form-control" id="email" placeholder="email...">
            </div>
            <div class="form-group">
                <label for="phone_number">Phone Number</label>
                <input type="text" required name="phone_number" class="form-control" id="phone_number" placeholder="phone_number...">
            </div>
            <div class="form-group">
                <label for="address">Password</label>
                <input type="password" required name="password" class="form-control" id="password" placeholder="Password...">
            </div>
            <input type="submit" class="btn btn-md btn-primary" value="Save">
        </form>

    </div>
</div>
@endsection