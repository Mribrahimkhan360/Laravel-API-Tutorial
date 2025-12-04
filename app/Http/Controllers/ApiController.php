<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    //
    public function getAllStudents()
    {
        // Logic to retrieve all students
    }
    public function getStudent($id)
    {
        // Logic to retrieve a specific student by ID
    }
    public function createStudent(Request $request)
    {
        // Logic to create a new student
    }
    public function updateStudent(Requwst $request, $id)
    {
        // Logic to update an existing student
    }
    public function deleteStudent($id)
    {
        // Logic to delete a student
        
    }
}
