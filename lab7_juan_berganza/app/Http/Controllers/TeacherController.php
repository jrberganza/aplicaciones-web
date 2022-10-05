<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Http\Requests\StoreTeacherRequest;
use App\Http\Requests\UpdateTeacherRequest;
use App\Models\Course;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("teachers.index", [
            "teachers" => Teacher::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("teachers.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTeacherRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTeacherRequest $request)
    {
        $teacher = new Teacher();

        $teacher->name = $request->input("name");
        $teacher->dpi = $request->input("dpi");
        $teacher->address = $request->input("address");
        $teacher->telephone = $request->input("telephone");
        $teacher->department = $request->input("department");
        $teacher->municipality = $request->input("municipality");
        $teacher->zone = $request->input("zone");
        $teacher->birthdate = $request->date("birthdate");
        $teacher->gender = $request->input("gender");
        $teacher->academic_degree = $request->input("academic_degree");

        DB::transaction(function () use ($teacher) {
            $teacher->save();
        });

        return redirect("/teachers");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        return view("teachers.show", [
            "teacher" => $teacher,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        return view("teachers.edit", [
            "teacher" => $teacher,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTeacherRequest  $request
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTeacherRequest $request, Teacher $teacher)
    {
        $teacher->name = $request->input("name");
        $teacher->dpi = $request->input("dpi");
        $teacher->address = $request->input("address");
        $teacher->telephone = $request->input("telephone");
        $teacher->department = $request->input("department");
        $teacher->municipality = $request->input("municipality");
        $teacher->zone = $request->input("zone");
        $teacher->birthdate = $request->date("birthdate");
        $teacher->gender = $request->input("gender");
        $teacher->academic_degree = $request->input("academic_degree");

        DB::transaction(function () use ($teacher) {
            $teacher->save();
        });

        return redirect("/teachers/" . $teacher->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();

        return redirect()->back();
    }
}
