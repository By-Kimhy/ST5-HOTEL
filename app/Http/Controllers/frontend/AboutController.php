<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    public function index(){
        $guests = DB::table('guests')->count();
        $rooms = DB::table('rooms')->count();
        $staffs = DB::table('staff')->count();
        $feedbacks = DB::table('feedback')->count();
        return view('frontend.about.index')
            ->with('staffs', $staffs)
            ->with('feedbacks', $feedbacks)
            ->with('rooms', $rooms)
            ->with('guests', $guests);
    }
}
