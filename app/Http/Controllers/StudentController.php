<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function student() {
        $student = DB::table("students")->get();
        return view("pages.welcome", compact("student"));
    }
}
