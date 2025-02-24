<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoomController extends Controller
{
    public function index(){
        $roomtypes = DB::table('room_types')
            ->select('roomType_name', 'roomType_price','roomType_Description','roomType_bed','roomType_Capacity')
            ->get();
        return view('frontend.rooms.index')
        ->with('roomtypes', $roomtypes);
    }

}
