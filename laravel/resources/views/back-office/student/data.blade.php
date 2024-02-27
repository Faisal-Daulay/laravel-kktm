@extends('back-office.home')

@section('content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4 col-lg-12">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">List Of Student</h6>
        </div>
        <div class="card-body">
            <a href="{{ route('students.create') }}" class="btn btn-primary mb-3">Add New Student</a>
            <div class="dropdown">
                <button class="mb-4 btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Export
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ url('students-pdf') }}">PDF</a></li>
                    <li><a class="dropdown-item" href="{{ url('students-export') }}">Excel</a></li>
                </ul>
            </div>
            <form action="{{ url('students') }}" method="get">
                @csrf <!-- Add CSRF token for form submission -->

                <div class="form-group">
                    <input type="text" class="form-control" name="search" id="exampleInputEmail" placeholder="Search..."
                        value="{{ request('search') }}">
                </div>
            </form>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Bil</th>
                            <th>Fullname</th>
                            <th>Matric Number</th>
                            <th>IC</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $bil = 1;
                        @endphp
                        @foreach ($students as $student)
                            <tr>

                                <td>{{ $bil++ }}</td>
                                <td>{{ $student->fullname }}</td>
                                <td>{{ $student->matric_number }}</td>
                                <td>{{ $student->ic }}</td>
                                <td>{{ $student->email }}</td>
                                <td>{{ $student->address }}</td>
                                <td>
                                    <div class="dropdown">
                                        <button class="mb-4 btn btn-primary dropdown-toggle" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Action
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="/students/view/{{ $student->id }}">View
                                                    Profil</a></li>
                                            <li><a class="dropdown-item" href="/students/edit/{{ $student->id }}">Edit</a>
                                            </li>
                                            <li><a class="dropdown-item" href="/students/delete/{{ $student->id }}"
                                                    onclick="return confirm('Are you sure to delete this student?')">Delete</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
                <div class="d-flex justify-content-end">

                    Current Page: {{ $students->currentPage() }}<br>
                    Total Data: {{ $students->total() }}<br>
                    Data perhalaman: {{ $students->perPage() }}<br>
                    <br>
                    {{ $students->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
