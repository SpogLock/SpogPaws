<?php

namespace App\Http\Controllers\Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Helpers\ApiHelper;

class AuthController extends Controller
{
    public function get_registerpage(){
        return view('client.modules.register');
    }

    public function signupuser(Request $request)
    {
        // Validate input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'password' => 'required|min:6|confirmed',
        ]);

        // Prepare API data
        $formData = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'role' => 'customer'
        ];

        // Send request to API
        $response = ApiHelper::post('/user/signup', $formData);

        if (isset($response['status']) && $response['status'] === 'success') {
            return redirect()->route('get-loginpage')->with('success', 'Signup successful! Please log in.');
        } else {
            $errorMessage = $response['message'] ?? 'Signup failed. Please try again.';
            return redirect()->route('get-registerpage')->with('error', $errorMessage);
        }
    }

    public function get_loginpage(){
        return view('client.modules.login');
    }

    public function loginUser(Request $request)
    {
        // Validate input fields
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // API login request
        $formData = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        $response = ApiHelper::post('/user/login', $formData);

        // Check if login was successful
        if (isset($response['status']) && $response['status'] === 'success') {
            // Store user details in session
            Session::put('user', $response['data']);
            return redirect('/')->with('success', 'Login successful! Welcome, ' . $response['data']['name']);
        } else {
            $errorMessage = $response['message'] ?? 'Login failed. Please check your credentials.';
            return redirect()->route('get-loginpage')->with('error', $errorMessage);
        }
    }

    public function logoutUser(Request $request)
    {
        Session::forget('user');
        Session::flush();
        return redirect('/')->with('success', 'You have been logged out.');
    }
}
