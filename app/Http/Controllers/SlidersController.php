<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;

class SlidersController extends Controller
{
    public function webindex()
    {
        $slider = Slider::all();
        return view('index', ['sliders' => $slider]);
    }

    public function index()
    {
        $slider = Slider::all();
        return view('slider.slider', ['sliders' => $slider]);
    }

    public function newslider()
    {
        return view('slider.newslider');
    }

    public function addslider(Request $request)
    {
        // Validate the request
        $request->validate([
            'heading' => 'nullable|string|max:255',
            'description' => 'nullable|string|max:500',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Image validation
        ]);

        // Store the image
        $imagePath = $request->file('image')->store('sliderimages', 'public');

        // Save data to the database
        Slider::create([
            'heading' => $request->heading,
            'description' => $request->description,
            'image' => $imagePath,
        ]);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Slider added successfully!');
    }

    public function destroy($id)
    {
        $record = Slider::findOrFail($id);

        // Delete the record
        $record->delete();

        // Redirect back with success message
        return redirect()->back()->with('success', 'Record deleted successfully!');
    }
}
