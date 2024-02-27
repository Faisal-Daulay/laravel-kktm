@extends('back-office.home')

@section('content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4 col-lg-12">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Activity Log Staff</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Log Name</th>
                            <th>Description</th>
                            <th>Event</th>
                            <th>Log Date Activity</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($logs as $key => $log)
                            <tr class="text-center">
                                <td>{{ $log->log_name }}</td>
                                <td>{{ $log->description }} By {{ $log->log_name }}</td>
                                <td class="text-capitalize text-center">
                                    @if ($log->event === 'created')
                                        <span class="bg-success text-white px-3 py-2 rounded">
                                            {{ $log->event }}
                                        </span>
                                    @elseif($log->event === 'updated')
                                        <span class="bg-primary text-white px-3 py-2 rounded">
                                            {{ $log->event }}
                                        </span>
                                    @elseif($log->event === 'deleted')
                                        <span class="bg-danger text-white px-3 py-2 rounded">
                                            {{ $log->event }}
                                        </span>
                                    @endif
                                </td>
                                <td>{{ $log->updated_at }}</td>
                                <td>
                                    <a class="btn btn-danger" href="/logs/view/{{ $log->id }}">
                                        View Activity
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
                <div class="d-flex justify-content-end">

                    Current Page: {{ $logs->currentPage() }}<br>
                    Total Data: {{ $logs->total() }}<br>
                    Data perhalaman: {{ $logs->perPage() }}<br>
                    <br>
                    {{ $logs->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
