<?php

namespace App\Http\Controllers;

use App\Models\MdlCourseCategoryApi;
use Illuminate\Http\Request;

class MdlCourseCategoryController extends Controller
{
    public function index()
    {
        $category = MdlCourseCategoryApi::all();
        return response()->json($category);
    }

    public function show($id)
    {
        $category = MdlCourseCategoryApi::findOrFail($id);
        return response()->json($category);
    }

    public function store(Request $request)
    {
        $course = MdlCourseCategoryApi::create($request->all());
        return response()->json($course, 201);
    }

    public function update(Request $request, $id)
    {
        $course = MdlCourseCategoryApi::find($id);
        if (!$course) {
            return response()->json(['message' => 'Category not found'], 404);
        }
        $course->update($request->all());
        return response()->json($course);
    }

    public function destroy($id)
    {
        $course = MdlCourseCategoryApi::find($id);
        if (!$course) {
            return response()->json(['message' => 'Category not found'], 404);
        }
        $course->delete();
        return response()->json(['message' => 'Category deleted']);
    }
}
