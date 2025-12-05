<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class ApiController extends Controller
{
    // ✅ Read All
    public function getAllStudents()
    {
        return response()->json(Student::all());
    }

    // ✅ Read Single
    public function getStudent($id)
    {
        $student = Student::find($id);

        if (!$student) {
            return response()->json(['error' => 'Not Found'], 404);
        }

        return response()->json($student);
    }

    // ✅ Create
    public function createStudent(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'course' => 'required'
        ]);

        $student = Student::create($request->all());

        return response()->json(['success' => true, 'data' => $student]);
    }

    // ✅ Update
    public function updateStudent(Request $request, $id)
    {
        $student = Student::find($id);

        if (!$student) {
            return response()->json(['error' => 'Not Found'], 404);
        }

        $student->update($request->all());

        return response()->json(['success' => true, 'data' => $student]);
    }

    // ✅ Delete
    public function deleteStudent($id)
    {
        $student = Student::find($id);

        if (!$student) {
            return response()->json(['error' => 'Not Found'], 404);
        }

        $student->delete();

        return response()->json(['success' => true, 'message' => 'Deleted']);
    }
}
