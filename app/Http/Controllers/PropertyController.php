<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Property;
use App\Models\PropertyImage;
use App\Models\Property_amenity;
use App\Models\Amenity;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
// use Intervention\Image\Facades\Image;
// use Intervention\Image\ImageServiceProviderLaravelRecent;

// use Intervention\Image\Facades\Image;
use GdImage;


class PropertyController extends Controller
{

    public function index()
    {
        try {
            $last = Property::latest()->first()->id;
            $randomId = $last + rand(1, 100);
        } catch (\Throwable $th) {
            $randomId = 1;
        }
        return view('agents.newProperty', compact('randomId'));
    }

    public function store(Request $request)
    {
        // Create a new property
        $propertyData = [
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'type' => $request->input('property_types'),
            'address' => $request->input('address'),
            'city' => $request->input('city'),
            'country' => $request->input('country'),
            'price' => $request->input('price'),
            'isSell' => $request->input('isSell'),
            'bedrooms' => $request->input('bedrooms'),
            'bathrooms' => $request->input('bathrooms'),
            'rooms' => $request->input('rooms'),
            'size' => $request->input('size'),
            'floor' => $request->input('floor'),
            'isActive' => 1,
            'building_age' => $request->input('buildingAge'),
            'keywords' => 'hello world',
            'parking'=> $request->input('parking'),
            'user_id'=> auth()->user()->id,
        ];

        $amenityNames = $request->input('amenities', []);

        
        // Create the property and retrieve its ID for later use
        $property = Property::create($propertyData);
        $propertyId = $property->id;        
        
        // Retrieve the amenities by their names or create new ones if they don't exist
        $amenities = [];
        foreach ($amenityNames as $amenityName) {
            // find the amenity_id by amenity_name and store it in the property_amenities table
            try{
                $amenityID = Amenity::where('amenity_name', $amenityName)->first()->id;
                $amenity = Property_amenity::create([
                    'property_id' => $propertyId,
                    'amenity_id' => $amenityID,
                ]);
            } catch (\Throwable $th) {
                $amenity = Amenity::create([
                    'amenity_name' => $amenityName,
                ]);
                $amenityID = $amenity->id;
                $amenity = Property_amenity::create([
                    'property_id' => $propertyId,
                    'amenity_id' => $amenityID,
                ]);
            }
        }

        // Handle asset associations
        $assets = $request->session()->get('uploaded_assets', []);
        foreach ($assets as $assetId) {
            $asset = PropertyImage::find($assetId);
            if ($asset) {
                $asset->property_id = $propertyId;
                $asset->save();
            }
        }
        // Clear uploaded_assets session data
        $request->session()->forget('uploaded_assets');

        // RETURN A JSON RESPONSE WITH THE NEW PROPERTY DETAILS
        return response()->json([
            'property' => $property,
            'amenities' => $amenities,
            'assets' => $assets,
        ]);
    }

    public function uploadAsset(Request $request)
    {

        
        // Handle asset upload
        $file = $request->file('file');
        // $resizedImage = Image::make($file)
        // ->resize(800, null, function ($constraint) {
        //     $constraint->aspectRatio();
        //     $constraint->upsize();
        // })
        // ->encode('jpg', 80);

        //  $manager = new ImageServiceProviderLaravelRecent($file);
        //  $image= $manager('file');
        //     $pathToResizedImage = $file->store('assets', 'public');
        //     $image->resize(800, null, function ($constraint) {
        //         $constraint->aspectRatio();
        //         $constraint->upsize();
        //     });
        //     $image->save($pathToResizedImage);
            
        //  $image->resize(300, null, function ($constraint) {
        //      $constraint->aspectRatio();
        //  });
        //  $image->save($pathToResizedImage);
            /////////////////////////////////////////////////////
            /////////////////////////////////////////////////////
        // GdImage to resize the image and save it to the same path 
        
        $asset = PropertyImage::create([
            $filePath = $file->store('assets', 'public'),
            'file_path' => $filePath,
            'filename' => $filePath,
            'property_id' => $request->route('id'),
        ]);

        // Store the uploaded asset ID in session for later association
        $uploadedAssets = $request->session()->get('uploaded_assets', []);
        $uploadedAssets[] = $asset->id;
        $request->session()->put('uploaded_assets', $uploadedAssets);

        // Return the uploaded asset ID as a response
        return response()->json(['asset_id' => $asset->id]);
    }

    // create a function to delete an asset from the database
    function deleteAssetDB($id){
        $asset = PropertyImage::find($id);
        $asset->delete();
    }
    public function search(Request $request){
        $query = $request->input('query');
        $results = Property::where('title', 'like', "%$query%")
                        ->orWhere('description', 'like', "%$query%")
                        ->orWhere('keywords')
                        ->orWhere('country')
                        ->orWhere('city')
                        ->get();

        return view('clients.searchPage', ['results' => $results]);
    }


    public function deleteAsset(Request $request){
       // delete the asset from the storage
        // verify in the the table property_images if the asset exists
        // delete the asset from the database
        $fileDB = PropertyImage::where('property_id', $request->route('id'))->first();
        if($fileDB){
            // delete the asset from the database
            $fileDB->delete();
            // delete the asset from the session
            $uploadedAssets = $request->session()->get('uploaded_assets', []);
            $uploadedAssets = array_diff($uploadedAssets, [$request->route('id')]);
            $request->session()->put('uploaded_assets', $uploadedAssets);
            $filename = $fileDB->filename; // Replace with the actual filename of the asset

            $filePath = public_path('storage/' . $filename);
            
            if (File::exists($filePath)) {
                File::delete($filePath);
                echo "Asset deleted successfully.";
            } else {
                echo "Asset not found.";
            }
        return response()->json(['asset_id' => $filePath]);
    }
}
}




























































// $property = Property::create([
//     'title' => 'hello world',
//     'description' => $request->input('description'),
//     'type' => 'house',
//     'address' => 'hello world 123 street 123',
//     'price' => 12504,
//     'isSell' => 'sell',
//     'bedrooms' => 5,
//     'bathrooms' => 4,
//     'rooms' => 5,
//     'size' => 2055,
//     'floor' => 2,
//     'isActive' => 1,
//     'building_age' => $request->input('buildingAge'),
//     'keywords' => 'hello world',
//     'parking'=> 2,
//     'garage'=> 1,
//     'user_id'=> 1,
// ]);










// class PropertyController extends Controller
// {
//     //
//     // public function store(Request $request)
//     // {
//     //     $adress = $request->input('adress');
//     //     $type = $request->input('type');
//     //     $price = $request->input('price');
//     //     $isSell = $request->input('isSell');
//     //     $bedrooms = $request->input('bedrooms');
//     //     $bathroom = $request->input('bathroom');
//     //     $room = $request->input('room');
//     //     $size = $request->input('size');
//     //     $isActive = 1;
//     //     $description = $request->input('description');
//     //     $buildingAge = $request->input('buildingAge');
//     //     $keywords = $request->input('keywords');
//     //     // Validate the incoming request data
//     //     $validatedData = $request->validate([
//     //         'name' => 'required|string',
//     //         'address' => 'required|string',
//     //         'assets' => 'array', // Assuming 'assets' is an array of asset data
//     //         'assets.*.name' => 'required|string',
//     //         'assets.*.value' => 'required|numeric',
//     //     ]);
//     //     try{
//     //         $property = User::create([
//     //             'adress' => $adress,
//     //             'type' => $type,
//     //             'price' => $price,
//     //             'isSell' => $isSell,
//     //             'bedrooms' => $bedrooms,
//     //             'bathroom' => $bathroom,
//     //             'room' => $room,
//     //             'size' => $size,
//     //             'isActive' => $isActive,
//     //             'description' => $description,
//     //             'buildingAge' => $buildingAge,
//     //             'keywords' => $buildingAge,
//     //         ]);
//     //         if(isset($validatedData['assets'])){
//     //             foreach($validatedData['assets'] as $propertyAsset){

//     //             }
//     //         }
//     //         return redirect()->back()->with('message', 'User created successfully.');
//     //     }
//     //     catch(\Exception $e){

//     //     }
//     // }



// }




///////////////// THE LATEST ONE ///////////////////////


// <?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\User;
// use App\Models\Property;
// use App\Models\PropertyImage;
// use App\Models\Property_amenity;
// use App\Models\Amenity;

// class PropertyController extends Controller
// {

//     public function index()
//     {
//         // Get the latest ID from the properties table and increment it by a random number
//         try {
//             $last = Property::latest()->first()->id;
//             $randomId = $last + rand(1, 100);
//         } catch (\Throwable $th) {
//             $randomId = 1;
//         }
//         return view('agents.newProperty', compact('randomId'));
//     }

//     public function store(Request $request)
//     {
//         // Create a new property
//         $propertyData = [
//             'title' => 'Test the world',
//             'description' => 'title description',
//             'type' => 'house',
//             'address' => 'hello world 123 street 123',
//             'price' => 12504,
//             'isSell' => 'sell',
//             'bedrooms' => 5,
//             'bathrooms' => 4,
//             'rooms' => 5,
//             'size' => 2055,
//             'floor' => 2,
//             'isActive' => 1,
//             'building_age' => $request->input('buildingAge'),
//             'keywords' => 'hello world',
//             'parking'=> 2,
//             'garage'=> 1,
//             'user_id'=> 1,
//         ];

//         $amenityNames = $request->input('amenities', []);

        
//         // Create the property and retrieve its ID for later use
//         $property = Property::create($propertyData);
//         $propertyId = $property->id;        
        
//         // $property = Property::create($propertyData);

//         // Retrieve the amenities by their names or create new ones if they don't exist
//         $amenities = [];
//         foreach ($amenityNames as $amenityName) {
//             // find the amenity_id by amenity_name and store it in the property_amenities table
//             try{
//                 $amenityID = Amenity::where('amenity_name', $amenityName)->first()->id;
//                 $amenity = Property_amenity::create([
//                     'property_id' => $propertyId,
//                     'amenity_id' => $amenityID,
//                 ]);
//             } catch (\Throwable $th) {
//                 $amenity = Amenity::create([
//                     'amenity_name' => $amenityName,
//                 ]);
//                 $amenityID = $amenity->id;
//                 $amenity = Property_amenity::create([
//                     'property_id' => $propertyId,
//                     'amenity_id' => $amenityID,
//                 ]);
//             }
//             // $amenity = Amenity::firstOrCreate(['amenity_name' => $amenityName]);
//             // $amenities[] = $amenity->id;

//         }

//         // // Attach the amenities to the property
//         // $property->amenities()->attach($amenities);

//         // // Handle property amenities
//         // $amenities = $request->input('amenities', []);
//         // foreach ($amenities as $amenity) {

//         // }

//         // Handle asset associations
//         // $assets = $request->session()->get('uploaded_assets', []);
//         // foreach ($assets as $assetId) {
//         //     $asset = PropertyImage::find($assetId);
//         //     $asset->property_id = 1;
//         //     $asset->save();
//         // }
//         // Clear uploaded_assets session data
//         // $request->session()->forget('uploaded_assets');
        

//         // Handle asset associations
//         $assets = $request->session()->get('uploaded_assets', []);
//         foreach ($assets as $assetId) {
//             $asset = PropertyImage::find($assetId);
//             if ($asset) {
//                 $asset->property_id = $propertyId;
//                 $asset->save();
//             }
//         }
//         // Clear uploaded_assets session data
//         $request->session()->forget('uploaded_assets');

//             /////////////////////////////////////////
//     }

//     public function uploadAsset(Request $request)
//     {
//         // Handle asset upload
//         $file = $request->file('file');
//         $asset = PropertyImage::create([
//             $filePath = $file->store('assets', 'public'),
//             'file_path' => $filePath,
//             'filename' => $filePath,
//             'property_id' => $request->route('id'),
//         ]);

//         // Store the uploaded asset ID in session for later association
//         $uploadedAssets = $request->session()->get('uploaded_assets', []);
//         $uploadedAssets[] = $asset->id;
//         $request->session()->put('uploaded_assets', $uploadedAssets);

//         // Return the uploaded asset ID as a response
//         return response()->json(['asset_id' => $asset->id]);
//     }
// }
