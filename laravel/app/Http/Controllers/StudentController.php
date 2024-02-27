<?php

namespace App\Http\Controllers;

use App\Exports\studentExport;
use App\Models\Student;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Spatie\Activitylog\Models\Activity;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('back-office.student.data', [
            "students" => Student::latest()->filter(request(['search']))->paginate(10)->withQueryString()
        ]);
    }

    public function create()
    {
        return view('back-office.student.create_student');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'fullname' => 'nullable|string|max:255',
            'matric_number' => 'nullable|string|max:20',
            'ic' => 'nullable|string|max:20',
            'email' => 'nullable|email|max:255',
            'address' => 'nullable|string|max:255',
            'semester' => 'nullable|string|max:255',
            'program_of_study' => 'nullable|string|max:255',
            'phone_number' => 'nullable|string|max:20',
            'religion' => 'nullable|string|max:50',
            'races' => 'nullable|string|max:50',
            'date_of_birth' => 'nullable|date',
            'birthplace' => 'nullable|string|max:255',
            'gender' => 'nullable',
            'age' => 'nullable|integer|min:1|max:150',
            'fathers_name' => 'required|string|max:255',
            'mothers_name' => 'required|string|max:255',
            'fathers_phone_number' => 'required|string|max:20',
            'mothers_phone_number' => 'required|string|max:20',
            'parent_address' => 'required|string|max:255',
        ]);

        // Create student
        $student = Student::create($data);

        // Associate parent with student
        $student->student_parent()->create($data);

        return redirect()->route('students')
            ->with('success', 'Student record added successfully');
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $student = Student::with('student_parent')->findOrFail($id);

        return view('back-office.student.profile', compact('student'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $student = Student::with('student_parent')->findOrFail($id);

        return view('back-office.student.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id) // Change $id to $id
    {
        // $student = Student::findOrFail($id); // Get the student instance
        $student = Student::with('student_parent')->findOrFail($id);

        $validatedData = $request->validate([
            'fullname' => 'nullable|string|max:255',
            'matric_number' => 'nullable|string|max:20',
            'ic' => 'nullable|string|max:20',
            'email' => 'nullable|email|max:255',
            'address' => 'nullable|string|max:255',
            'semester' => 'nullable|string|max:255',
            'program_of_study' => 'nullable|string|max:255',
            'phone_number' => 'nullable|string|max:20',
            'religion' => 'nullable|string|max:50',
            'races' => 'nullable|string|max:50',
            'date_of_birth' => 'nullable|date',
            'birthplace' => 'nullable|string|max:255',
            'gender' => 'nullable',
            'age' => 'nullable|integer|min:1|max:150',
            'fathers_name' => 'required|string|max:255',
            'mothers_name' => 'required|string|max:255',
            'fathers_phone_number' => 'required|string|max:20',
            'mothers_phone_number' => 'required|string|max:20',
            'parent_address' => 'required|string|max:255',
        ]);

        // dd($validatedData);
        $student->update($validatedData); // Update the student record

        $student->student_parent()->update($request->only([
            'fathers_name',
            'mothers_name',
            'fathers_phone_number',
            'mothers_phone_number',
            'address',
        ]));

        return redirect()->route('students', $student->id)
            ->with('success', 'Student record updated successfully');
    }


    public function export()
    {
        return Excel::download(new studentExport, 'studentdata.xlsx');
    }

    public function pdf()
    {
        $mpdf = new \Mpdf\Mpdf();
        $students = Student::with('student_parent')->OrderBy('id', 'asc')->get();
        $mpdf->WriteHTML(view('back-office.student.studentpdf', ['students' => $students]));
        $mpdf->Output('students-pdf.pdf', 'D');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $id)
    {
        $id->student_parent()->delete();
        $id->delete();
        return redirect('/students');
    }

    public function log()
    {
        return view('back-office.logactivity.log', [
            'logs' => Activity::latest()->orderByDesc('created_at')->paginate(10)
        ]);
    }


    public function logview(Request $request, $id)
    {

        $logs = Activity::findOrFail($id); // Retrieve the student by its ID
        // dd($request);
        return view('back-office.logactivity.logview', compact('logs'));
    }
}
