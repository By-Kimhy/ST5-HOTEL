<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\RoomType;
use Illuminate\Http\Request;

class BRoomTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roomTypes= RoomType::all();
        return view('backend.roomType.index')
        ->with('roomTypes',$roomTypes);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.roomType.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'roomType_name' => ['required'],
            'roomType_price' => ['required'],
            'roomType_Description' => ['required'],
            'roomType_bed' => ['required'],
            'roomType_Capacity' => ['required'],
        ]);

        $input=$request->input();
        RoomType::create($input,$validated);
        return redirect('/roomType')
        ->with('flash_message','Room Type Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $roomTypes=RoomType::find($id);
        return view('backend.roomType.edit')
        ->with('roomTypes',$roomTypes);;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'roomType_name' => ['required'],
            'roomType_price' => ['required'],
            'roomType_Description' => ['required'],
            'roomType_bed' => ['required'],
            'roomType_Capacity' => ['required'],
        ]);
        $roomTypes=RoomType::find($id);
        $input=$request->all();
        $roomTypes->update($input, $validated);

        return redirect('/roomType')
        ->with('flash_message','Room Type Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        RoomType::destroy($id);
        return redirect('/roomType')
        ->with('flash_message','Room Type Delete!');

    }
}
