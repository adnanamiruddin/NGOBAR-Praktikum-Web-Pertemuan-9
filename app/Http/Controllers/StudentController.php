<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Student::all();
        return view('students.index', [
            'students' => $data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('nim', $request->nim);
        Session::flash('name', $request->name);
        Session::flash('studyProgram', $request->studyProgram);
        Session::flash('faculty', $request->faculty);

        $request->validate([
            'nim' => 'required|unique:students,nim',
            'name' => 'required',
            'studyProgram' => 'required',
            'faculty' => 'required',
        ], [
            'nim.required' => 'NIM harus diisi!',
            'nim.unique' => 'NIM sudah terdaftar!',
            'name.required' => 'Nama harus diisi!',
            'studyProgram.required' => 'Program studi harus diisi!',
            'faculty.required' => 'Fakultas harus diisi!',
        ]);

        $data = [
            'nim' => $request->nim,
            'name' => $request->name,
            'studyProgram' => $request->studyProgram,
            'faculty' => $request->faculty,
        ];
        Student::create($data);
        return redirect()->to('/students')->with('success', 'Data mahasiswa berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $nim)
    {
        $student = Student::where('nim', $nim)->first();
        return view('students.detail', [
            'student' => $student,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $nim)
    {
        $student = Student::where('nim', $nim)->first();
        return view('students.edit', [
            'student' => $student,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $nim)
    {
        $request->validate([
            'name' => 'required',
            'studyProgram' => 'required',
            'faculty' => 'required',
        ], [
            'nim.unique' => 'NIM sudah terdaftar!',
            'name.required' => 'Nama harus diisi!',
            'studyProgram.required' => 'Program studi harus diisi!',
            'faculty.required' => 'Fakultas harus diisi!',
        ]);

        $data = [
            'name' => $request->name,
            'studyProgram' => $request->studyProgram,
            'faculty' => $request->faculty,
        ];
        Student::where('nim', $nim)->update($data);
        return redirect()->to('/students')->with('success', 'Data mahasiswa berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $nim)
    {
        Student::where('nim', $nim)->delete();
        return redirect()->to('/students')->with('success', 'Data mahasiswa berhasil dihapus!');
    }
}
