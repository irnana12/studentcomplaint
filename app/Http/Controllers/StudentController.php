<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('pages.student.index', compact('students'));
    }

    // Form publik - Siswa isi data sendiri
    public function create()
    {
        return view('pages.student.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nis' => 'required|unique:students|max:20',
            'nama' => 'required|max:100',
            'kelas' => 'required|max:10',
            'email' => 'required|email|unique:students|max:100',
        ]);

        $student = Student::create($request->all());

        return redirect()->route('complaint.create', ['student_id' => $student->id]);
    }

    // Form Admin - tambah siswa manual
    public function adminCreate()
    {
        return view('pages.student.create');
    }

    public function adminStore(Request $request)
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

    public function show(string $id)
    {
        $student = Student::findOrFail(decrypt($id));
        return view('pages.student.show', compact('student'));
    }

    public function edit(string $id)
    {
        $student = Student::findOrFail(decrypt($id));
        return view('pages.student.edit', compact('student'));
    }

    public function update(Request $request, string $id)
    {
        $student = Student::findOrFail(decrypt($id));

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

    public function destroy(string $id)
    {
        $student = Student::findOrFail(decrypt($id));
        $student->delete();

        return redirect()->route('admin.student.index')
            ->with('success', 'Data Siswa Berhasil di Hapus');
    }
}
