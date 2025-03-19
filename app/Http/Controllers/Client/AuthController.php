<?php

namespace App\Http\Controllers\Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;



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
        $response = Http::post('https://gnat-careful-sparrow.ngrok-free.app/api/v1/user/signup', $formData);

        if ($response->successful())
        {
            return redirect()->route('get-loginpage')->with('success', 'Signup successful! Please log in.');
        }
        else
        {
            // Extract error details
            $errorMessage = 'Signup failed. Please try again.';
            if ($response->failed()) {
                $errorBody = $response->json();
                if (isset($errorBody['message'])) {
                    $errorMessage = $errorBody['message'];
                } elseif (isset($errorBody['errors'])) {
                    $errorMessage = implode(', ', array_map(function ($errors) {
                        return implode(' ', $errors);
                    }, $errorBody['errors']));
                }
            }
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

        $response = Http::post('https://gnat-careful-sparrow.ngrok-free.app/api/v1/user/login', $formData);
        $data = $response->json(); // Decode API response

        // Check if login was successful
        if ($response->successful() && isset($data['status']) && $data['status'] === 'success') {
            // Store user details in session
            Session::put('user', $data['data']);

            return redirect('/')->with('success', 'Login successful! Welcome, ' . $data['data']['name']);
        }
        else
        {
        // Handle failed login with detailed error messages
            $errorMessage = 'Login failed. Please check your credentials.';

            if (isset($data['message'])) {
                $errorMessage = $data['message'];
            }
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
