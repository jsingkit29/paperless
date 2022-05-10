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

    public function index()
    {
        if(auth()->check() && auth()->user()->user_group_id == 1){
            // $users = User::select("SELECT * FROM users WHERE user_group_id = '2'");
            // $users = User::where('user_group_id',2)->get();
            $users=User::where('user_group_id',2)->get();
            return view('dashboard/index', [
                "users" => $users,
            ]);
           
            }
    }

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
       // return response()->json($request->all());
        $validation = $request->validate([
            //"user_group_id" => "required",
            "heiname" => "required",
            "username" => "required",
            "password" => "required",
            "gdrivelink" => "required",
            "confirm_password" => "required"

        ]);

        
            $user = new User();
            $user->user_group_id = '2';
            $user->heiname = $request->heiname;
            $user->username = $request->username;
            $request->merge(['password' => bcrypt($request->input('password'))]);
            $user->password = $request->password;
            $user->gdrivelink = $request->gdrivelink;
            $user->activated = '1';
            $user->save();
        // try{
        // dd($user);
        // }catch(Throwable $e){
        //     dd($e);
        // }
        // return response()->json($user);

         // return redirect('/');
         return redirect()->back()->with('message', 'User Successfully Added');
    }

    public function logout()
    {

        Auth::logout();
        return redirect('/');
    }
}
