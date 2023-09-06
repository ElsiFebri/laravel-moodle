<?php

namespace App\Http\Controllers;

use App\Models\MdlCourseApi;
use Illuminate\Http\Request;

class MdlCourseController extends Controller
{
    public function index()
{
    $courses = MdlCourseApi::all();
    foreach ($courses as $course) {
        $course->category; 
    }
    
    return response()->json([
        'success' => true,
        'data' => $courses
    ]);
}


    public function show($id)
    {
        $course = MdlCourseApi::find($id);
        if (!$course) {
            return response()->json(['message' => 'Course not found'], 404);
        }

        $course->category;
        return response()->json([
            'success' => true,
            'data' => $course
        ]);
    }

    public function store(Request $request)
    {
        $course = MdlCourseApi::create($request->all());
        return response()->json([
            'success' => true,
            'message' => 'Berhasil menambah data'
        ], 200);
    }

    public function update(Request $request, $id)
    {
        $course = MdlCourseApi::find($id);
        if (!$course) {
            return response()->json(['message' => 'Course not found'], 404);
        }
        $course->update($request->all());
        return response()->json([
            'success' => true,
            'message' => 'Berhasil mengubah data'
        ]);
    }

    public function destroy($id)
    {
        $course = MdlCourseApi::find($id);
        if (!$course) {
            return response()->json(['message' => 'Course not found'], 404);
        }
        $course->delete();
        return response()->json(['message' => 'Course deleted']);
    }
}
