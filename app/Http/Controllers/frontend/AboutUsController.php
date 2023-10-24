<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Aboutus;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    //
    public function index(){
        return view('frontend/about-us', [
            'title' => 'About Us',
            'aboutus'  => Aboutus::where('deleted_by', '0')->first()
        ]);
    }
}
