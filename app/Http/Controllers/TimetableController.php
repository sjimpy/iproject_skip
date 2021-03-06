<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests;

class TimetableController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application Timetable.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
            "page_title"=>"Timetable"
        );

        return view('timetable', $data);
    }
}