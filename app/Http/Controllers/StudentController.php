<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use function PHPUnit\Framework\returnArgument;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $myString = "The quick brow for jumps over the lazy dog. This dog from PP.";
        $lowercase = Str::upper($myString);
        $truncated = Str::limit($lowercase, 25);

//        dd($truncated);

        $student = Student::all();
        return view('students.index', compact('student', 'truncated'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required',
            'email'   => 'required',
            'age'     => 'required',
            'subject' => 'required',
        ]);

        $success = Student::create([
            'name'    => $request['name'],
            'email'   => $request['email'],
            'age'     => $request['age'],
            'subject' => $request['subject'],
        ]);

        return ['$success' => $success];
//        return redirect('/')->with('message', 'Student has been save');

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */

    public function edit(Student $student)
    {
        request()->validate([
            'name'    => 'required',
            'email'   => 'required',
            'age'     => 'required',
            'subject' => 'required',
        ]);

        $success = $student->update([
            'title'   => request('title'),
            'content' => request('content'),
        ]);

        return ['success' => $success];


    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $success = $student->delete();

        return [
            'success' => $success,
        ];
    }
}
