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
    // Validate request data
    $request->validate([
        'property_title' => 'required|string|max:255',
        'location' => 'required|string|max:255',
        'price_per_month' => 'required|numeric',
        'electricity_price' => 'required|numeric',
        'water_price' => 'required|numeric',
        'area' => 'required|numeric',
        'property_images' => 'required|array', // Validate that at least one image is uploaded
        'property_images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate each image
        'description' => 'nullable|string',
    ]);

    $imagePaths = [];
    
    // Handle file uploads
    if ($request->hasFile('property_images')) {
        $userId = Auth::id(); // Get the authenticated user's ID

        foreach ($request->file('property_images') as $image) {
            // Generate a unique name for the image
            $imageName = $userId . '_' . time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            // Store the image in 'storage/app/public/property_images'
            $imagePath = $image->storeAs('property_images', $imageName, 'public');
            $imagePaths[] = $imagePath; // Collect image paths in an array
        }
    }

    // Save the property data, including the image paths as a JSON string
    Property::create([
        'property_title' => $request->property_title,
        'description' => $request->description,
        'location' => $request->location,
        'price_per_month' => $request->price_per_month,
        'area' => $request->area,
        'electricity_price' => $request->electricity_price,
        'water_price' => $request->water_price,
        'owner_id' => Auth::id(), // Save the owner ID
        'images' => json_encode($imagePaths), // Store the array as a JSON string in the database
    ]);

    // Redirect back to listings with a success message
    return redirect()->route('my-listings')->with('success', 'Property created successfully.');
}


public function DisplaySpecifyProperty($id)
{
     // Find the property by its ID
     $property = Property::findOrFail($id);

     // Decode the JSON string for images into an array
     $property->images = json_decode($property->images);

    // Return the view with the property data
    return view('uneditfile.single-property-1', compact('property'));
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
        $properties = Property::paginate(8);
    
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
        // Validate request data
        $request->validate([
            'property_title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'location' => 'required|string|max:255',
            'price_per_month' => 'required|numeric',
            'area' => 'required|numeric',
            'electricity_price' => 'required|numeric',
            'water_price' => 'required|numeric',
            'property_images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
        // Find the property to update
        $property = Property::findOrFail($id);
        
        // Update the property fields
        $property->property_title = $request->property_title;
        $property->description = $request->description;
        $property->location = $request->location;
        $property->price_per_month = $request->price_per_month;
        $property->area = $request->area;
        $property->electricity_price = $request->electricity_price;
        $property->water_price = $request->water_price;
    
        // Handle property image update if provided
        if ($request->hasFile('property_images')) {
            $imagesArray = [];
            $userId = Auth::id(); // Get the authenticated user's ID
    
            foreach ($request->file('property_images') as $image) {
                // Generate a unique name for the image using the user ID and property ID
                $imageName = $userId . '_' . $property->id . '_' . time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                // Store the image in 'storage/app/public/property_images'
                $path = $image->storeAs('property_images', $imageName, 'public');
                $imagesArray[] = $path; // Collect image paths in an array
            }
            
            // Convert images array back to JSON and save it
            $property->images = json_encode(array_unique($imagesArray));
        }
        
        // Save the property
        $property->save();
        
        // Redirect back to listings with a success message
        return redirect()->route('my-listings')->with('success', 'Property updated successfully.');
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
