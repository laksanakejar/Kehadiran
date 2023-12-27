<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PembimbingController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('pembimbing.index', compact('students'));
    }

    public function edit($id)
    {
        $students = Student::where('id', $id)->first();
        return view('pembimbing.edit', compact('students'));
    }

    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'present' => 'required',
        //     'image' => 'nullable'
        // ]);

        // Student::where('id', $id)->update([
        //     'present' => $request->present,
        //     'image' => $request->image,
        // ]);
        // return redirect('/pembimbing');

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
        return redirect('/pembimbing')->with('status', 'Berhasil di update');
    }

    public function search(Request $request)
    {
        $search = $request->search;
        $students = Student::where('rayon', 'like', "%" . $search . "%")->paginate(5);
        return view('pembimbing.index', compact('students'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
