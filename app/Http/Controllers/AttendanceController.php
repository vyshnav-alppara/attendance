<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\InternalUser;
use Illuminate\Routing\Controller;
use App\Models\ExternalUser;

class AttendanceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        return view('home.home');
    }


    public function search(Request $request)
    {

        $request->validate([
            'search_term' => 'required|string',
        ]);

        $searchTerm = $request->input('search_term');


        if (filter_var($searchTerm, FILTER_VALIDATE_EMAIL)) {

            $attendanceData = Attendance::whereHas('internalUser', function ($query) use ($searchTerm) {
                $query->where('email', $searchTerm);
            })->get();
        } else {

            $attendanceData = Attendance::whereHas('externalUser', function ($query) use ($searchTerm) {
                $query->where('phone_2', $searchTerm);
            })->get();
        }

        return view('home.home', compact('attendanceData'));
    }
}
