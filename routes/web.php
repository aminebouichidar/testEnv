<?php

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\PropertyController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// this is just a test for template
// Route::get('/home', function(){
//     return view('home');
// });

Route::get('/', function(){
    // get the last 8 Properties
    $propertiesListe = App\Models\Property::latest('created_at')->take(8)->get();
    return view('clients.index', ['properties' => $propertiesListe]);
})->name('home');

// search in index
Route::get('/search', [PropertyController::class, 'search'])->name('search');

// Route::get('/client/property', function(){
//     return view('clients.property');
// });

// Route to the property page by his given ID and put in the link the title of the property 
Route::get('/client/property/{id}/{title}', function($id, $title){
    $property = App\Models\Property::find($id);
    // send the property_asset to the view and the property_amenties 
    // select * from property_amenities where property_id = $id
    $property_amenities = App\Models\Property_amenity::where('property_id', $id)->get();
    $property_asset = App\Models\PropertyImage::where('property_id', $id)->get();
    return view('clients.prop', compact('property', 'property_amenities', 'property_asset'));
    // return view('clients.prop', compact('property'));
    // return view('clients.property', compact('property'));
})->name('property');

Route::get('/property', function(){
    return view('clients.prop');
});


Route::get('/search-Test', function(){
    return view('clients.searchPage');
});

// Route::get('/dashboard', function(){
//     return view('agents.dashboard');
// });

Route::get('/dashboard', function () {
    if (auth()->check()) {
        // User is logged in
        // Your logic here
        return view('agents.dashboard');
    } else {
        // User is not logged in, redirect to another page
        return redirect('/login');
    }
})->middleware('auth')->name('dashboard');

Route::get('/new-agent', function(){
    if(auth()->check()){
        if(auth()->user()->role == 'admin'){
            return view('agents.newAgent');
        }else{
            return redirect('/dashboard');
        }
    }else{
        return redirect('/login');
    }
})->middleware('auth')->name('newAgent');

// route post to add new agent 
Route::post('/new-agent', function(){
    if(auth()->check()){
        if(auth()->user()->role == 'admin'){
            $userController = new UserController();
            $userController->store(request());
            if($userController){
                return redirect()->back()->with('message', 'Agent created successfully.');
            }else{
                return redirect()->back()->with('error', 'Agent creation failed, please verify if the agent already exist, and try again.');
            }
        }else{
            return redirect('/dashboard');
        }
    }else{
        return redirect('/login');
    }
})->middleware('auth')->name('addAgent');

// Route::get('/new-property', function(){
//     if(auth()->check()){
//         return view('agents.newProperty');
//     }else{
//         return redirect('/login');
//     }
// })->middleware('auth')->name('newProperty');

// convert to function  Route::get('/properties', [PropertyController::class, 'index'])->name('properties.index');
// call the function index in the controller PropertyController and name it properties.index and verify if the user is authentificated or not
Route::get('/new-property', [PropertyController::class, 'index'])->name('newProperty')->middleware('auth');

// route to assets.delete by his given ID 
Route::post('/assets/delete/{id}', [PropertyController::class, 'deleteAsset'])->name('assets.delete')->middleware('auth');

Route::get('/manage-Agent', function(){
    if(auth()->check()){
        if(auth()->user()->role == 'admin'){
            $users = App\Models\User::all();
            return view('agents.manageAgent', compact('users')); 
        }else{
            return redirect('/dashboard');
        }
    }else{
        return redirect('/login');
    }
})->middleware('auth')->name('manageAgent');
// Route::get('/users', 'UserController@index')->name('users.index');

Route::get('/change-Password', function () {
    if (auth()->check()) {
        // User is logged in
        // Your logic here
        return view('agents.modifyPassword');
    } else {
        // User is not logged in, redirect to another page
        return redirect('/login');
    }
})->middleware('auth')->name('resetPassword');

Route::get('/properties', function () {
    if (auth()->check()) {
        return view('agents.propertiesListe');
    } else {
        return redirect('/login');
    }
})->middleware('auth')->name('propertiesList');


// delete agent route by his given ID
Route::get('/delete-agent/{id}', function($id){
    if(auth()->check()){
        if(auth()->user()->role == 'admin'){
            $user = App\Models\User::find($id);
            $user->delete();
            return redirect()->back()->with('message', 'Agent deleted successfully.');
        }else{
            return redirect('/dashboard');
        }
    }else{
        return redirect('/login');
    }
})->middleware('auth')->name('deleteAgent');

// editAgent route by his given ID 
Route::get('/edit-agent/{id}', function($id){
    if(auth()->check()){
        if(auth()->user()->role == 'admin'){
            $user = App\Models\User::find($id);
            return view('agents.editAgent', compact('user'));
        }else{
            return redirect('/dashboard');
        }
    }else{
        return redirect('/login');
    }
})->middleware('auth')->name('editAgent');

// revokeAgent route by his given ID
//The PUT method is not supported for route revoke-agent/4. Supported methods: GET, HEAD.
Route::put('/revoke-agent/{id}', function($id){
    if(auth()->check()){
        if(auth()->user()->role == 'admin'){
            $user = App\Models\User::find($id);
            if($user->status == 'inactive')
                $user->status = 'active';
            else
            $user->status = 'inactive';
            $user->save();
            return redirect()->back()->with('message', 'Agent revoked successfully.');
        }else{
            return redirect('/dashboard');
        }
    }else{
        return redirect('/login');
    }
})->middleware('auth')->name('revokeAgent');

//The PUT method is not supported for route change-Password. Supported methods: GET, HEAD.
Route::put('/change-Password', function(){
    if(auth()->check()){
        if(auth()->user()->role == 'admin'){
            $user = App\Models\User::find(auth()->user()->id);
            $user->password = Hash::make('12345678');
            $user->save();
            return redirect()->back()->with('message', 'Password changed successfully.');
        }else{
            return redirect('/dashboard');
        }
    }else{
        return redirect('/login');
    }
})->middleware('auth')->name('resetPassword');
//         $user = App\Models\User::find(auth()->user()->id);
//         $user->password = Hash::make('12345678');
//         $user->save();
//         return redirect()->back()->with('message', 'Password changed successfully.');
//     }else{
//         return redirect('/login');
//     }
// })->middleware('auth')->name('resetAgent');


// save property route 
Route::post('/properties', [PropertyController::class, 'store'])->name('properties.store');
Route::post('assets.upload/{id}', [PropertyController::class, 'uploadAsset'])->name('assets.upload');


// Authentification routes
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;
use Laravel\Fortify\Http\Controllers\RegisteredUserController;
use Laravel\Fortify\Http\Controllers\PasswordResetLinkController;
use Laravel\Fortify\Http\Controllers\NewPasswordController;
use Laravel\Fortify\Http\Controllers\PasswordConfirmationController;

Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])->name('password.request');
Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])->name('password.email');
Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])->name('password.reset');
Route::post('/reset-password', [NewPasswordController::class, 'store'])->name('password.update');

Route::get('/confirm-password', [PasswordConfirmationController::class, 'show'])->name('password.confirm');
Route::post('/confirm-password', [PasswordConfirmationController::class, 'store']);