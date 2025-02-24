<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Guest;
use Illuminate\Http\Request;

class BGuestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $guests= Guest::all();
        return view('backend.guest.index')
        ->with('guests',$guests);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.guest.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'guest_name' => ['required'],
            'guest_contact' => ['required'],
        ]);

        $input=$request->input();
        Guest::create($input,$validated);
        return redirect('/guest')
        ->with('flash_message','Guest Added!');
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
        $guests=Guest::find($id);
        return view('backend.guest.edit')
        ->with('guests',$guests);;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'guest_name' => ['required'],
            'guest_contact' => ['required'],
        ]);

        $guests=Guest::find($id);
        $input=$request->all();
        $guests->update($input, $validated);

        return redirect('/guest')
        ->with('flash_message','Guest Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Guest::destroy($id);
        return redirect('/guest')
        ->with('flash_message','Guest Delete!');
    }
}
