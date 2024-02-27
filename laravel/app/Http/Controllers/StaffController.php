<?php

namespace App\Http\Controllers;

use App\Exports\staffExport;
use App\Models\Staff;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('back-office.staff.data', [
            "staffs" => Staff::latest()->filter(request(['search']))->paginate(10)->withQueryString()
        ]);
    }

    public function createStaff()
    {
        return view('back-office.staff.create_staff');
    }

    /**
     * Show the form for creating the resource.
     */
    public function create()
    {
        return view('end-user.user.register');
    }

    /**
     * Store the newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string'],
            'address' => ['required', 'string'],
            'email' => ['required', 'unique:staff,email'],
            'phone_number' => ['required'],
            'password' => ['required', 'string'],
        ]);

        $staff = new Staff();
        $staff->name = $request->name;
        $staff->address = $request->address;
        $staff->email = $request->email;
        $staff->phone_number = $request->phone_number;
        $staff->password = Hash::make($request->password);
        $staff->save();

        return redirect('/signin');
    }

    public function storeStaff(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string'],
            'address' => ['required', 'string'],
            'email' => ['required', 'unique:staff,email'],
            'phone_number' => ['required'],
            'password' => ['required', 'string'],
        ]);

        $staff = new Staff();
        $staff->name = $request->name;
        $staff->address = $request->address;
        $staff->email = $request->email;
        $staff->phone_number = $request->phone_number;
        $staff->password = Hash::make($request->password);
        $staff->save();

        return redirect('/staff');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $staff = Staff::findOrFail($id); // Retrieve the student by its ID

        return view('back-office.staff.profile', compact('staff'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $staff = Staff::findOrFail($id); // Retrieve the student by its ID

        return view('back-office.staff.edit', compact('staff'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $staff = Staff::findOrFail($id);

        $validatedData = $request->validate([
            'name' => ['required', 'string'],
            'address' => ['required', 'string'],
            'email' => ['required', 'unique:staff,email,' . $id], // Ensure email uniqueness except for current staff
            'phone_number' => ['required'],
            'password' => ['required', 'string'],
        ]);

        // Hash the password before updating
        $validatedData['password'] = Hash::make($request->password);

        $staff->update($validatedData);

        return redirect()->route('staff', $staff->id)
            ->with('success', 'Staff record updated successfully');
    }

    public function export()
    {
        return Excel::download(new staffExport, 'staffdata.xlsx');
    }

    public function pdf()
    {
        $mpdf = new \Mpdf\Mpdf();
        $staff= Staff::OrderBy('id', 'asc')->get();
        $mpdf->WriteHTML(view('back-office.staff.staffpdf', ['staffs'=> $staff]));
        $mpdf->Output('staff-pdf.pdf', 'D');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Staff $id)
    {
        $id->delete();
        return redirect('/staff');
    }
}
