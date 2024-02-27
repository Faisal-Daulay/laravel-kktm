<h3>List Of Staff</h3>
<table border="1">
    <thead>
        <tr>
            <th>Bil</th>
            <th>Name</th>
            <th>Address</th>
            <th>Email</th>
            <th>Phone Number</th>

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
        </tr>
        @endforeach
    </tbody>

</table>