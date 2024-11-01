<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function hotel()
    {
        return view('hotel');
    }

    public function meeting()
    {
        return view('meeting');
    }

    public function weddings()
    {
        return view('wedding.index');
    }
    
    public function contact()
    {
        return view('contact');
    }

    public function profile($firstname, $lastname)
    {
        $user = User::where('firstname', $firstname)->where('lastname', $lastname)->firstOrFail();

        return view('profile', ['user' => $user]);
    }


    public function adminIndex()
    {
        return view('admin.index');
    }
    public function adminHotel()
    {
        return view('admin.hotel.index');
    }

    public function adminWedding()
    {
        return view('admin.wedding.index');
    }
    
}
