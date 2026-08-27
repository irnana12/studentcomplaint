<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Complaint;

class ComplaintController extends Controller
{
    public function index()
    {
        $complaints = Complaint::all();
        return view('pages.complaint.index', compact('complaints'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'isi_pengaduan' => 'required',
        ]);

        $validated['tanggal'] = now();

        Complaint::create($validated);

        return redirect()->route('admin.complaint.index')
                            ->with('success', 'Data pengaduan berhasil di kirim');
    }

    public function show(string $id)
    {
        $complaint = Complaint::findOrFail($id);
        return view('pages.complaint.show', compact('complaint'));
    }

    public function destroy(string $id)
    {
        $complaint = Complaint::findOrFail(decrypt($id));
        $complaint->delete();

        return redirect()->route('admin.complaint.index')
                            ->with('success', 'Data pengaduan berhasil di hapus');
    }
}
