@extends('back-office.home')

@section('content')
<!-- DataTales Example -->
<div class="card shadow mb-4 col-lg-12">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">List Of Staff</h6>
    </div>
    <div class="card-body">
        <a href="{{ route('staff.create') }}" class="btn btn-primary mb-3">Add Staff</a>
        <div class="dropdown">
            <button class="mb-4 btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Export
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ url('staff-pdf') }}">PDF</a></li>
                <li><a class="dropdown-item" href="{{ url('staff-export') }}">Excel</a></li>
            </ul>
        </div>
        <form action="{{ url('staff') }}" method="get">
            @csrf <!-- Add CSRF token for form submission -->

            <div class="form-group">
                <input type="text" class="form-control" name="search" id="exampleInputEmail" placeholder="Search..." value="{{ request('search') }}">
            </div>
        </form>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Bil</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $bil = 1;
                    @endphp
                    @foreach ($staffs as $staff)
                    <tr>

                        <td>{{ $bil++ }}</td>
                        <td>{{ $staff->name }}</td>
                        <td>{{ $staff->address }}</td>
                        <td>{{ $staff->email }}</td>
                        <td>{{ $staff->phone_number }}</td>
                        <td>
                            <div class="dropdown">
                                <button class="mb-4 btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Action
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/staff/view/{{$staff->id}}">view</a></li>
                                    <li><a class="dropdown-item" href="/staff/edit/{{$staff->id}}">Edit</a></li>
                                    <li><a class="dropdown-item" href="/staff/delete/{{$staff->id}}" onclick="return confirm('Are you sure to delete this staff?')">Delete</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
            <div class="d-flex justify-content-end">

                Current Page: {{ $staffs->currentPage() }}<br>
                Total Data: {{ $staffs->total() }}<br>
                Data perhalaman: {{ $staffs->perPage() }}<br>
                <br>
                {{ $staffs->links() }}
            </div>
        </div>
    </div>
</div>
@endsection