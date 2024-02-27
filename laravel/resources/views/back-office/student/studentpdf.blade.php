<h3>List Of Student</h3>
<table border="1">
    <thead>
        <tr>
            <th>Bil</th>
            <th>Fullname</th>
            <th>Matric Number</th>
            <th>IC</th>
            <th>Email</th>
            <th>Address</th>
            <th>Program Of Study</th>
            <th>Phone Number</th>
            <th>Religion</th>
            <th>Races</th>
            <th>Date Of Birth</th>
            <th>Birthplace</th>
            <th>Gender</th>
            <th>Ages</th>
            
            
            
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
            <td>{{ $student->program_of_study }}</td>
            <td>{{ $student->phone_number }}</td>
            <td>{{ $student->religion }}</td>
            <td>{{ $student->races }}</td>
            <td>{{ $student->date_of_birth }}</td>
            <td>{{ $student->birthplace }}</td>
            <td>{{ $student->gender }}</td>
            <td>{{ $student->ages }}</td>
            
        </tr>
        @endforeach
    </tbody>

</table>