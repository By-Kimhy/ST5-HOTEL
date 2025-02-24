<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $guests = DB::table('guests')->count();
        $rooms = DB::table('rooms')->count();
        $staffs = DB::table('staff')->count();
        $feedbacks = DB::table('feedback')->count();
        $roomtypes = DB::table('room_types')
            ->select('roomType_name', 'roomType_price')
            ->get();

        $feedback = DB::table('guests')
            ->join('feedback', 'guests.id', '=', 'feedback.guest_id')
            ->select(
                'guests.guest_name as g_name',
                'feedback.comment as f_comment'
            )
            ->get();


        return view('frontend.home.index')
            ->with('roomtypes', $roomtypes)
            ->with('staffs', $staffs)
            ->with('feedbacks', $feedbacks)
            ->with('feedback', $feedback)
            ->with('rooms', $rooms)
            ->with('guests', $guests);
    }
}
