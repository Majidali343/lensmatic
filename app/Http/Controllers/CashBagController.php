<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Cashbag;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class CashBagController extends Controller
{
    public function index() {
        $users = User::where('role', 'user')->where('isuserapproved', 'yes')->get();
       
        return view('admin.assignCashbags', ['users'=> $users] );
    }

    public function store(Request $request){
      // Validate input
      $request->validate([
        'id' => 'required|exists:users,id', // Ensure the user ID exists
        'amount' => 'required|numeric|min:1', // Ensure the amount is valid
      ]);

      $user = User::find($request->id);

      $Cashbag = Cashbag::create([
        'user_id' => $request->id,
        'amount' => $request->amount,
      ]);

     $Cashbag->save();

    // Return a success response
     return back()->with('success', 'Cash bag added to' .$user->first_name.' ',$user->first_name ."'s Wallet" );
    }

    public function getcasgbags()  {
        $usersWithCashbags = DB::table('cashbags')
        ->leftjoin('users','users.id','=','cashbags.user_id')->get();
        return view('admin.givenCashbags', compact('usersWithCashbags'));

    }

    public function getcasgbagsbyuser()  {
        $usersWithCashbags = DB::table('cashbags')
        ->leftjoin('users','users.id','=','cashbags.user_id')->
        where('users.id',Auth::user()->id)->get();

        return view('user.givenCashbags', compact('usersWithCashbags'));

    }
}
