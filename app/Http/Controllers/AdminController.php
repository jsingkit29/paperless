<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Services\UserGroup\UserGroupInterface;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;


class AdminController extends Controller
{
    public function create()
    {
        return view('user/edit',[

        ]);
    }

    public function store(Request $request)
    {

        // $validation = $request->validate([
        //     "document_type" => "required",
        //     "description" => "required"
        // ]);
        $validation = $request->validate([
            "user_group_id" => "required",
            "username" => "required",
            "password" => "required",
            "confirm_password" => "required"

        ]);

        $user = new User();
        $user->user_group_id = $request->user_group_id;
        $user->username = $request->username;
        $request->merge(['password' => bcrypt($request->input('password'))]);
        $user->password = $request->password;
        $user->activated = '1';
        $user->save();

         // return redirect('/');
         return redirect()->back()->with('message', 'User Successfully Added');
    }

    public function logout()
    {

        Auth::logout();
        return redirect('/');
    }
}
