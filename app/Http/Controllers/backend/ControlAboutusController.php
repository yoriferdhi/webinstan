<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Aboutus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ControlAboutusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('backend.aboutus.index', [
            'title' => 'About Us',
            'aboutus'  => Aboutus::where('deleted_by', '0')->first()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Aboutus $aboutus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Aboutus $aboutus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Aboutus $aboutus)
    {
        //
        $validated = [
            'image' => 'image|file|max:50000',
            'title' => 'required',
            'content' => 'required',
        ];

        $validatedData = $request->validate($validated);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image']    = $request->file('image')->store('aboutus-images');
        }

        $validatedData['updated_by']    = auth()->user()->id;

        // $insert = Aboutus::where('id', $aboutus->id)
        $insert = Aboutus::where('id', 1)
            ->update($validatedData);
// ddd($insert);
        return redirect('/control/aboutus')->with('success','About Us has been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Aboutus $aboutus)
    {
        //
    }
}
