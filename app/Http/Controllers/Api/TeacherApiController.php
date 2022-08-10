<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\Teacher;
use Illuminate\Http\Response;

class TeacherApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(Teacher $teacher)
    {
        $teacher = Teacher::get();
        return response()->json($teacher);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function store(Request $request)
    {
        $request->validate(['name' => 'required|string', 'sex' => 'required|string', 'level' => 'required']);
        $success = Teacher::create([
            'name' => $request['name'],
            'sex' => $request['sex'],
            'level' => $request['level'],
        ]);
        return ['success' => $success];
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return array
     */
    public function update(Teacher $teacher)
    {
        $success = $teacher->update([
            'name' => request('name'),
            'sex' => request('sex'),
            'level' => request('level'),
        ]);

        return ['$success' => $success];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
