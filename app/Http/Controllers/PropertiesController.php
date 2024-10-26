<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class PropertiesController extends Controller
{
    /**
     * Display a listing of the properties.
     */
    public function index()
    {
        // Get the authenticated user's ID
        $userId = Auth::id(); 
    
        // Fetch properties associated with the authenticated user, paginate by 6 per page
        $properties = Property::where('owner_id', $userId)->paginate(6);
    
        // Return the view with paginated properties
        return view('users.my-listings', compact('properties'));
    }
    /**
     * Show the form for creating a new property.
     */
    public function create()
    {
        return view('properties.create');
    }

    /**
     * Store a newly created property in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'property_title' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'price_per_month' => 'required|numeric',
            'electricity_price' => 'required|numeric',
            'water_price' => 'required|numeric',
            'area' => 'required|numeric',
            'property_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate image
            'description' => 'nullable|string',
        ]);
    
        $imagePath = null;
        if ($request->hasFile('property_image')) {
            $image = $request->file('property_image');
            $userId = Auth::id(); // Get the authenticated user's ID
            $imageName = $userId . '_' . time() . '.' . $image->getClientOriginalExtension(); // Rename the file
            $imagePath = $image->storeAs('property_images', $imageName, 'public'); // Store the image in 'storage/app/public/property_images'
        }
    
        // Save the property data, including the image path
        Property::create([
            'property_title' => $request->property_title,
            'description' => $request->description,
            'location' => $request->location,
            'price_per_month' => $request->price_per_month,
            'area' => $request->area,
            'electricity_price' => $request->electricity_price,
            'water_price' => $request->water_price,
            'owner_id' => Auth::id(),
            'images' => $imagePath, // Store the image path as a string
        ]);
    
        return redirect()->route('my-listings')->with('success', 'Property created successfully.');
    }

    

    /**
     * Display the specified property.
     */
    public function show($id)
    {
        $property = Property::findOrFail($id);
        return view('properties.show', compact('property'));
    }

    
    public function display()
    {
        // Fetch all properties from the database
        $properties = Property::all(); // You can use paginate() if needed
    
        // Return the view with the properties
        return view('uneditfile.properties-full-list-1', compact('properties'));
    }
    /**
     * Show the form for editing the specified property.
     */
    public function edit($id)
    {
        $property = Property::findOrFail($id);
        return response()->json($property);
    }
    
    public function update(Request $request, $id)
    {
        $property = Property::findOrFail($id);
        $property->property_title = $request->property_title;
        $property->description = $request->description;
        $property->location = $request->location;
        $property->price_per_month = $request->price_per_month;
        $property->area = $request->area;
        $property->electricity_price = $request->electricity_price;
        $property->water_price = $request->water_price;
    
        if ($request->hasFile('property_image')) {
            $path = $request->file('property_image')->store('property_images', 'public');
            $property->images = $path;
        }
    
        $property->save();
    
        return response()->json(['message' => 'Property updated successfully.']);
    }
    


    /**
     * Remove the specified property from storage.
     */
    public function destroy($id)
    {
        // Tìm kiếm và xóa tài sản theo ID
        $property = Property::findOrFail($id);
        
        if ($property->images) {
            $images = json_decode($property->images, true);
            if (is_array($images)) { // Check if $images is an array
                foreach ($images as $image) {
                    Storage::delete('public/' . $image); // Delete the image file
                }
            }
        }
        
        // Xóa bản ghi khỏi cơ sở dữ liệu
        $property->delete();
    
        // Chuyển hướng về trang danh sách tài sản với thông báo thành công
        return redirect()->route('my-listings')->with('success', 'Property deleted successfully.');
    }




  
public function showAllImages()
{
    // Path to the folder containing the images
    $imageDirectory = storage_path('app/public/property_images');

    // Get all files in the directory
    $images = [];
    if (File::exists($imageDirectory)) {
        $files = File::files($imageDirectory);

        // Filter only image files and get their relative path
        foreach ($files as $file) {
            if (in_array($file->getExtension(), ['jpg', 'jpeg', 'png', 'gif', 'svg'])) {
                $images[] = 'property_images/' . $file->getFilename();
            }
        }
    }

    // Pass the image paths to the view
    return view('users.all-images', compact('images'));
}

}
