<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function index()
    {
        return view('user.dashboard');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6', // Ensure password is at least 6 characters
        ]);

        // Attempt to authenticate the user
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {

            $user = Auth::user();

            if ($user->role == 'admin') {
                return redirect()->route('admin.dashboard');
            }


            if ($user->isuserapproved === "no") {
                Auth::logout();
                return back()->with('error', 'Your are not Approved by the admin, Please wait for admin approval'); // Add error message
            }

            if ($user->isuserapproved === "rejected") {
                Auth::logout();
                return back()->with('error', 'Your are Rejected By admin you can not login'); // Add error message
            }

            if ($user->role == 'user') {
                return redirect()->route('user.dashboard');
            }
        }

        // Authentication failed
        return back()->with('error', 'Invalid credentials. Please try again.'); // Add error message
    }

    public function forgotpassword(Request $request)
    {
        $request->validate([
            'otpemail' => 'required|email|exists:users,email',
        ], [
            'otpemail.exists' => 'The email address you entered is not registered.',
        ]);


        $user = User::where('email', $request->otpemail)->first();


        $id = $user->id * 398765;

        $messageContent = "Hi " . $user->first_name . ' ' . $user->last_name . ",\n\n";
        $messageContent .= "Welcome to Uniperks ! We are trying to generate your new pasword.\n\n";
        $messageContent .= "Please click the link below to Generate your new passwoed:\n";
        $messageContent .=  url('/NewPassword/' . $id) . "\n\n\n";
        $messageContent .= "If you did not generated the request please ignore this email.\n\n\n";
        $messageContent .= "Thank you !\n";
        $messageContent .= "Best Regards,\n";
        $messageContent .= "The Team";

        // Send the email
        Mail::raw($messageContent, function ($message) use ($user) {
            $message->to($user->email)
                ->subject('Forgot Your password');
        });

        return back()->with('success', 'Please check your email to generate new password.');
    }

    public function showNewPasswordForm($code)
    {

        return view('new-password', ['code' => $code]);
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'code' => 'required|string',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $id = $request->code / 398765;

        $user = User::where('id', $id )->first();

        if (!$user) {
            return redirect()->back()->withErrors(['code' => 'Invalid reset code.']);
        }

        $user->password = bcrypt($request->password);
       
        $user->save();

        return redirect('/login')->with('success', 'Your password has been updated.');
    }


    public function profile()
    {
        $user = User::where('id', Auth::user()->id)->first();
        return view('user.profile', ['user' => $user]);
    }

    public function logout()
    {
        Auth::logout(); // Logout the user
        return redirect()->route('login'); // Redirect to login page
    }



    public function pictureupload(Request $request)
    {
        $request->validate([
            'image' => 'required|file|mimes:jpeg,png,jpg,gif,svg',
        ]);

        // Get the current user
        $user = User::where('id', Auth::user()->id)->first();

        // Check if there's a previous image and delete it
        if ($user->image) {
            Storage::delete('public/' . $user->image);
        }

        // Store the new image
        $imagePath = $request->file('image')->store('images', 'public');

        // Update the user's image path
        $user->image = $imagePath;
        $user->save();

        return redirect()->back();
    }


    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            // 'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|digits:11|unique:users,phone',
            'address' => 'required|string|max:255',
            'password' => 'required|string|min:8|confirmed', // Ensure password confirmation
        ]);


        // Create a new user instance and save it
        $user = User::create([
            'first_name' => $validatedData['first_name'],
            // 'last_name' => $validatedData['last_name'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'address' => $validatedData['address'],
            'password' => Hash::make($validatedData['password']),
            'isuserapproved' =>'yes'

        ]);

        $user->save();

        // Compose the email content
        // $messageContent = "Hi " . $user->first_name . ' ' . $user->last_name . ",\n\n";
        // $messageContent .= "Welcome to Uniperks ! We're thrilled to have you as a part of our system.\n\n";
        // $messageContent .= "Here are some things you can do to get started:\n";
        // $messageContent .= "1. Explore uniperks.\n";
        // $messageContent .= "2. You might also get casbacks from admin .\n";
        // $messageContent .= "Thank you for joining us!\n";
        // $messageContent .= "Best Regards,\n";
        // $messageContent .= "The Team";

        // // Send the email
        // Mail::raw($messageContent, function ($message) use ($user) {
        //     $message->to($user->email)
        //         ->subject('Welcome to Uniperks');
        // });
        // Redirect or return a response
        return redirect()->route('login')->with('success', 'Account created successfully! Please log in.');
    }
}
