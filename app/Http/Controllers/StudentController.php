<?php

namespace App\Http\Controllers;

use App\Models\Student;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;


class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('student.data', compact('students'));
    }

    public function store(Request $request){
        // $request->dd('present');
        $request->validate([
            'nis' => 'required',
            'name' => 'required',
            'jk' => 'required',
            'rombel' => 'required',
            'rayon' => 'required',
        ]);

        Student::create([
            'nis' => $request->nis,
            'name' => $request->name,
            'jk' => $request->jk,
            'rombel' => $request->rombel,
            'rayon' => $request->rayon,
        ]);

        return redirect('/create');
    }

    public function edit($id)
    {
       $students = Student::where('id', $id)->first();
       return view('student.edit', compact('students'));
    }

    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'present' => 'required',
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        // ]);

        // Student::where('id', $id)->update([
        //     'present' => $request->present,
        //     'image' => $request->image,
        // ]);
        // return redirect('/student-data')->with('successUpdate', 'Berhasil mengirim data');
        $students = Student::find($id);
        $students->present = $request->input('present');
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time(). '.' .$extention;
            $file->move('storages/students/', $filename);
            $students->image = $filename;
        }
        $students->save();
        return redirect('/student-data')->with('successUpdate', 'Berhasil mengirim data');

    }

    public function search(Request $request)
    {
        $search = $request->search;
        $students = Student::where('rayon', 'like', "%" . $search . "%")->paginate(100);
        return view('student.data', compact('students'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function absen()
    {
        $students = Student::all();
        return view('student.absen', compact('students'));
    }
}
