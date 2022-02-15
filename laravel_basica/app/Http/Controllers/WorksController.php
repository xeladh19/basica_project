<?php

namespace App\Http\Controllers;
use App\Models\Work;
use Illuminate\Http\Request;

class WorksController extends Controller
{
    public function show(Work $work) {
        return view('works.show', compact('work'));
    }
    public function index() {
        return view('works.index');
    }
    public function more(int $offset = 6)
    {
        $posts = Work::orderBy('created_at', 'desc')->take(6)->offset($offset)->get();
        return view('works._list', compact('works'));
    }
}
