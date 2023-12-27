<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\SpladeTable;
use Spatie\QueryBuilder\QueryBuilder;

class KesiswaanController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('kesiswaan.index', compact('students'));
    }

    // public function search(Request $request)
    // {
    //     $search = $request->search;
    //     $students = Student::where('rayon', 'like', "%" . $search . "%")->paginate(5);
    //     return view('kesiswaan.index', compact('students'))->with('i', (request()->input('page', 1) - 1) * 5);
    // }
}
