<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rooms = Room::all();
        return view('backend.room.index')
            ->with('rooms', $rooms);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.room.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'room_name' => ['required'],
            'room_status' => ['required'],
            'roomType_id' => ['required'],
        ]);

        $input = $request->input();
        Room::create($input, $validated);
        return redirect('/room')
            ->with('flash_message', 'Room Added!');
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
        $rooms = Room::find($id);
        return view('backend.room.edit')
            ->with('rooms', $rooms);
        ;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'room_name' => ['required'],
            'room_status' => ['required'],
            'roomType_id' => ['required'],
        ]);

        $rooms = Room::find($id);
        $input = $request->all();
        $rooms->update($input, $validated);

        return redirect('/room')
            ->with('flash_message', 'Room Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Room::destroy($id);
        return redirect('/room')
            ->with('flash_message', 'Room Delete!');
    }
}
