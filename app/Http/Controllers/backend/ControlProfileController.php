<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ControlProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // return Profile::where('deleted_by', '0')->first();
        return view('backend.profile.index', [
            'title' => 'Profile',
            'profile'  => Profile::where('deleted_by', '0')->first()
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
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Profile $profile)
    {
        //
        $validated = [
            'image' => 'image|file|max:50000',
            'content' => 'required',
        ];

        $validatedData = $request->validate($validated);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image']    = $request->file('image')->store('profile-images');
        }

        $validatedData['updated_by']    = auth()->user()->id;

        Profile::where('id', $profile->id)
            ->update($validatedData);
        return redirect('/control/profile')->with('success','Profile has been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
