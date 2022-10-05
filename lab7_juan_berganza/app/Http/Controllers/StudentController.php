<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("students.index", [
            "students" => Student::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("students.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStudentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudentRequest $request)
    {
        $student = new Student();

        $student->name = $request->input("name");
        $student->dpi = $request->input("dpi");
        $student->address = $request->input("address");
        $student->telephone = $request->input("telephone");
        $student->department = $request->input("department");
        $student->municipality = $request->input("municipality");
        $student->zone = $request->input("zone");
        $student->birthdate = $request->date("birthdate");
        $student->gender = $request->input("gender");
        $student->career = $request->input("career");
        $student->faculty = $request->input("faculty");

        DB::transaction(function () use ($student) {
            $student->save();
        });

        return redirect("/students");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view("students.show", [
            "student" => $student,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view("students.edit", [
            "student" => $student,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStudentRequest  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        $student->name = $request->input("name");
        $student->dpi = $request->input("dpi");
        $student->address = $request->input("address");
        $student->telephone = $request->input("telephone");
        $student->department = $request->input("department");
        $student->municipality = $request->input("municipality");
        $student->zone = $request->input("zone");
        $student->birthdate = $request->date("birthdate");
        $student->gender = $request->input("gender");
        $student->career = $request->input("career");
        $student->faculty = $request->input("faculty");

        DB::transaction(function () use ($student) {
            $student->save();
        });

        return redirect("/students/" . $student->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->back();
    }
}
