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

        $attendanceData = Attendance::query()
            ->where(function ($query) use ($searchTerm) {
                $query->whereHas('internalUser', function ($q) use ($searchTerm) {
                    $q->where('email', $searchTerm);
                })->orWhereHas('externalUser', function ($q) use ($searchTerm) {
                    $q->where('phone_2', $searchTerm);
                });
            })
            ->get();

        return view('home.home', compact('attendanceData'));
    }
}
