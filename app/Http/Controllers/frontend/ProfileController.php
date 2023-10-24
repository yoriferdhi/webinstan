<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function index(){
        return view('frontend/profile', [
            'title' => 'Profile',
            'profile'  => Profile::where('deleted_by', '0')->first()
        ]);
    }
}
