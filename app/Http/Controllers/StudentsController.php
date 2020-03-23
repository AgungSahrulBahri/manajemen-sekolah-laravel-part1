<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $students = Student::all();
        return view('student.index', \compact('students'));
        // return \view('teacher.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return \view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request, [
        'nama' => 'required|max:100|min:4',
        'nis' => 'required|size:5',
        'ttl' => 'required',
        'no_tlp' => 'required|max:12',
        'asal' => 'required',
        'jurusan' => 'required',
        'status' => 'required'

        ]);

        $students = Student::create([
            'nama' => $request->nama,
            'nis' => $request->nis,
            'ttl' => $request->ttl,
            'no_tlp' => $request->no_tlp,
            'asal' => $request->asal,
            'jurusan' => $request->jurusan,
            'status' => $request->status
        ]);

        return redirect('student')->with('status', 'Berhasil di add');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
        return view('student.show',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
        return \view('student.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //

        Student::where('id', $student->id)->update([
            'nama' => $request->nama,
            'nis' => $request->nis,
            'ttl' => $request->ttl,
            'no_tlp' => $request->no_tlp,
            'asal' => $request->asal,
            'jurusan' => $request->jurusan,
            'status' => $request->status
        ]);
        return redirect('student')->with('status', 'Berhasil di update');
        // return $request;
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($student)
    {
        //
        $student = Student::findOrFail($student);
        $student->delete();
        // return redirect()->route('student.index');
        return redirect('student')->with('status', 'Berhasil di hapus');
    }
}
