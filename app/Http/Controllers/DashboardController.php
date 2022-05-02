<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // public function index()
    // {
    //     return view('dashboard/index');
    // }
    public function index()
    {
        if(auth()->check() && auth()->user()->user_group_id == 1){
        // $appointments = Appointment::all();
        // return view('dashboard/index', [
        //     "appointments" => $appointments,
        // ]);
        return view('dashboard/index');
        }

    }
}
