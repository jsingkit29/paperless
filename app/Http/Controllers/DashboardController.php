<?php

namespace App\Http\Controllers;

use App\Models\User;
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
        
        $users=User::where('user_group_id',2)->get();
        $currentuser = auth()->user()->gdrivelink;
        return view('dashboard/index', [
            "users" => $users,
            "currentuser" => $currentuser,
        ]);
       
        
    }
}
