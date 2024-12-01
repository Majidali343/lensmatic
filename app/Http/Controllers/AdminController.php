<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::where('role' , 'user')
        ->where('isuserapproved' , 'yes')->get();

        return view('admin.dashboard' , ['users'=> $users]);
    }

    public function userslist()
    {
        $users = User::where('role','!=' ,'admin')->get();
       
        return view('admin.user-list', ['users'=> $users] );
    }

    public function usersnew()
    {
        $users = User::where('role', 'user')->where('isuserapproved', 'no')->get();
       
        return view('admin.user-request', ['users'=> $users] );
    }

    public function updateUserStatus(Request $request, $id)
    {
        
        $request->validate([
            'status' => 'required|string|max:255', 
        ]);

        $user = User::where('id', $id)->first();

        if ($user) {

            $user->isuserapproved = $request->status;

            $user->save();

            if($request->status === 'yes')
            {
                return response()->json(['message' => 'user approved ']);
            }

            return response()->json(['message' => 'user rejected ']);
        } else {
            return response()->json(['message' => 'user not found.'], 404);
        }
    }

    public function deleteUser(Request $request, $id)
    {
        
        $request->validate([
            'status' => 'required|string|max:255', 
        ]);

        $user = User::where('id', $id)->first();

        if ($user) {

            $user->delete();

            return response()->json(['message' => 'user Removed ']);
        } else {
            return response()->json(['message' => 'user not found.'], 404);
        }
    }
}
