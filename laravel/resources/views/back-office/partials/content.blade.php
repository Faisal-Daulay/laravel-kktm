@extends('back-office.home')

@section('content')
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card bg-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <a href="/students" class="text-decoration-none">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                                Student
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-white">
                                Student Data
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>



    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card bg-primary shadow h-100 py-2">
            <a href="/staff" class="text-decoration-none">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">

                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                                Staff
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-white">
                                Staff Data
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="col-xl-6 col-md-6 mb-4">
        <div class="card bg-primary shadow h-100 py-2">
            <a href="/staff" class="text-decoration-none">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">

                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                                Log Update Student</div>
                            <div class="h5 mb-0 font-weight-bold text-white">
                                Log Update Student
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-6 mb-4">

            <!-- Illustrations -->
            <div class="card shadow mb-4">
                <div class="card-header py-3 bg-success">
                    <h6 class="m-0 font-weight-bold text-white">KKTM Ledang</h6>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" src="img/KKTM.jpg" alt="...">
                    </div>
                    <p class="px-3">
                        KKTM Ledang was officially built on 07 September 2005. Inauguration of KKTM Ledang by
                        YB Datuk Seri Hj. Mohd. Shafie bin Hj. Apdal, Minister of Rural and Regional Development (KKLW) at
                        that time. Began to operate fully on June 14, 2010 with the entry of the "first batch" of students
                        on July 12, 2010.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-lg-6 mb-4">
            <!-- Approach -->
            <div class="card shadow mb-4">
                <div class="card-header py-3 bg-success">
                    <h6 class="m-0 font-weight-bold text-white">For your information</h6>
                </div>
                <div class="card-body">
                    <p>SB Admin 2 makes extensive use of Bootstrap 4 utility classes in order to reduce
                        CSS bloat and poor page performance. Custom CSS classes are used to create
                        custom components and custom utility classes.</p>
                    <p class="mb-0">Before working with this theme, you should become familiar with the
                        Bootstrap framework, especially the utility classes.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
