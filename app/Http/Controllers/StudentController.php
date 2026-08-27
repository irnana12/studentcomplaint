<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('pages.student.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nis' => 'required|unique:students|max:20',
            'nama' => 'required|max:100',
            'kelas' => 'required|max:10',
            'email' => 'required|email|unique:students|max:100',
        ]);

        Student::create($request->all());

        return redirect()->route('admin.student.index')
                         ->with('success', 'Data Siswa Berhasil di Tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = Student::findOrFail($id);

        return view('pages.student.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Student::findOrFail($id);

        return view('pages.student.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student = Student::findOrfail(decrypt($id));

        $request->validate([
            'nis' => 'required|max:20|unique:students,nis,' . $student->id,
            'nama' => 'required|max:100',
            'kelas' => 'required|max:10',
            'email' => 'required|email|max:100|unique:students,email,' . $student->id,
        ]);

        $student->update($request->all());

        return redirect()->route('admin.student.index')
                            ->with('success', 'Data Siswa Berhasil di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::findOrFail(decrypt($id));
        $student ->delete();

        return redirect()->route('admin.student.index')
                            ->with('success', 'Data Siswa Berhasil di Hapus');
    }
}
